<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFirstStage()
    {
        $id = $this->id;
        $stage = Stage::where("package", $id)->orderBy("stage_id", "asc")->first();
        return $stage;
    }

    public function getNextStage($prev_stage)
    {
        $id = $this->id;
        $stage = Stage::where("package", $id)->where("stage_id", $prev_stage->stage_id + 1)->first();
        return $stage;
    }

    public static function getPackage($id)
    {
        return Package::where("id", $id)->first();
    }

    public static function getAllPackages() {
          return Package::all();
    }
}
