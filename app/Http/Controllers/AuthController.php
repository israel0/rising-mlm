<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Package;
use App\Models\User;
use App\Models\Wallet;
use App\Rules\SponsorValidationRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;


class AuthController extends Controller
{


    public function __construct()
    {
        $this->middleware("guest")->except("logout", "register", "registerAction", "validate_sponsor");
    }

    public function login()
    {
        $data["title"] = "Login";
        $data["activeMenu"] = 5;
        return view("auth.login", $data);
    }

    public function loginAction(Request $request)
    {
        $data["title"] = "Login";
        $data["activeMenu"] = 5;

        $validate = $request->validate([
            'userName' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validate)) {
            $user = auth()->user();
            if ($user->status == User::$USER_ACTIVATED) {
                $request->session()->regenerate();
                return redirect()->intended('user');
            } else {
                return to_route("activate_reg");
            }
        }

        session()->flash("error", "Invalid Username or Password");

        return back()->withInput();
        // return back()->withErrors([
        //     'userName' => 'Invalid Username or Password',
        // ])->onlyInput('userName');
    }

    public function register(Request $request)
    {
        $data["title"] = "Register";
        $data['referrerUsername'] = $request->query('ref');
        $packages = Package::all();
        $data["all_packages"] = compact("packages");
        return view("auth.register", $data);
    }

    public function registerAction(Request $request)
    {
        $data["title"] = "Register";
        $validate = $request->validate([
            'sponsorName' => [
                'required', "exists:users,userName", new SponsorValidationRule
            ],
            'package' => 'required|exists:packages,id',
            'firstName' => 'required|alpha',
            'lastName' => 'required|alpha',
            'phoneNumber' => 'required',
            'email' => 'required|email:rfc,dns',
            'userName' => 'required|alpha_num|min:3|max:20|unique:users,userName',
            'password' => 'required|min:6|max:20',
            'confirmPassword' => 'required|same:password',
            'terms' => "accepted"
        ]);

        $user = new User();
        $user->sponsorName = strtolower($validate["sponsorName"]);
        $user->package = $validate["package"];
        $user->userName = strtolower($validate["userName"]);
        $user->password = Hash::make($validate["password"]);
        $user->firstName = $validate["firstName"];
        $user->email = $validate["email"];
        $user->lastName = $validate["lastName"];
        $user->phoneNumber = $validate["phoneNumber"];
        $user->upline = strtolower($validate["sponsorName"]);
        $packageObj = Package::getPackage($user->package);
        $user->stage = $packageObj->getFirstStage()->id;
        // $user->activationCode = rand(1000000000, 9999999999);
        $user->save();
        $wallet = new Wallet();
        $wallet->userName = $user->userName;
        $wallet->save();
        Helper::activate_user($user);
        Auth::login($user);
        return to_route("dashboard");
    }

    public function validate_sponsor(Request $request)
    {
        $sponsorName = strtolower(trim($request->input("sponsorName")));
        $user = User::where("userName", $sponsorName)->first();
        $data = [];
        if (!$user) {
            $data["responseCode"] = 0;
            return response()->json($data);
        }
        $data["firstName"] = $user->firstName;
        $data["lastName"] = $user->lastName;
        $data["responseCode"] = 1;
        return response()->json($data);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }

    public function showForgetForm() {
        $data["title"] = "Forget Password";
        $data["activeMenu"] = 7;
        return view("auth.email", $data);
    }

    public function showResetForm(Request $request, $token = null)
    {
        $data["title"] = "Reset Password";
        $data["activeMenu"] = 7;
        return view('auth.reset' , $data)->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function reset(Request $request)
    {
        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $response == Password::PASSWORD_RESET
            ? redirect()->route("login")->with('status', __($response))
            : back()->withErrors(['email' => __($response)]);
    }

    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ];
    }

    protected function validationErrorMessages()
    {
        return [];
    }

    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

}
