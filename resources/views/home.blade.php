<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paulano Grace</title>
    <link rel="shortcut icon" href="{{ asset("landing/images/logo.png") }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset("landing/style.css") }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="w-full relative">
    <header class="sticky md:absolute top-0 w-full z-10 bg-black lg:bg-[transparent]">
      <div
        class="flex flex-col lg:flex-row items-center justify-between max-w-[1520px] mx-auto px-5 py-2"
      >
        <div class="flex items-center justify-between w-full lg:w-[15%]">
          <a href="{{ route("landing") }}" class="flex items-center">
            <img
              class="w-[100px] lg:w-[120px]"
              src="{{ asset("landing/images/logo.png") }}"
              alt="logo"
            />
          </a>
          <div class="switch lg:hidden">
            <input type="checkbox" id="checkbox" />
            <label for="checkbox" class="toggle">
              <div class="bars" id="bar1"></div>
              <div class="bars" id="bar2"></div>
              <div class="bars" id="bar3"></div>
            </label>
          </div>
        </div>

        <div>
          <ul
            class="menu text-white font-semibold capitalize hidden w-full lg:flex items-center text-sm gap-8"
          >
            <li>
              <a href="{{ route("landing") }}">home</a>
            </li>
            <li>
              <a href="{{ route("about") }}">about</a>
            </li>
            <li>
              <a href="{{ route("plan") }}">compensation plan</a>
            </li>
            <li>
              <a href="{{ route("invest") }}">invest</a>
            </li>
            <li>
              <a href="#">shop</a>
            </li>
            <li>
              <a href="#">blog</a>
            </li>
            <li>
              <a href="{{ route("help") }}">contact us</a>
            </li>
            <div class="flex items-center gap-4">
              <a href="{{ route("login") }}">
                <button class="button">Sign in</button>
              </a>
              <a href="{{ route("register") }}">
                <button class="button2">Create account</button>
              </a>
            </div>
          </ul>
          <ul
            id="mobile_menu"
            class="mobile hidden text-gray-200 font-semibold capitalize flex lg:hidden flex-col items-center justify-center gap- text-base py-[1rem] w-[100vw] h-[100svh] animate__animated animate__slideInRight bg-black fixed left-0"
          >
          <li>
            <a href="{{ route("landing") }}">home</a>
          </li>
          <li>
            <a href="{{ route("about") }}">about</a>
          </li>
          <li>
            <a href="{{ route("plan") }}">compensation plan</a>
          </li>
          <li>
            <a href="{{ route("invest") }}">invest</a>
          </li>
          <li>
            <a href="#">shop</a>
          </li>
          <li>
            <a href="#">blog</a>
          </li>
          <li>
            <a href="{{ route("help") }}">contact us</a>
          </li>
            <div class="flex flex-col items-center gap-6 w-full">
              <a href="{{ route("login") }}">
                <button class="button w-[60vw] lg:w-[0]">Sign in</button>
              </a>
              <a href="{{ route("register") }}">
                <button class="button2 w-[60vw] lg:w-[0]">
                  Create account
                </button>
              </a>
            </div>
          </ul>
        </div>
      </div>
    </header>


    <main>
      <div
          class="swiper h-[70svh] lg:h-[90svh]"
        >
          <div class="swiper-wrapper relative">
            <!-- Slides -->
            <div class="swiper-slide swiper_slide_one flex flex-col items-center justify-center">
              <div class="mx-auto max-w-[1520px] flex flex-col items-center justify-center gap-8 text-center w-[80%] lg:w-[50%]">
                <h1 class="text-3xl lg:text-6xl text-white font-bold drop-shadow-lg capitalize leading-snug text--slide"
                >elevate your style</h1>
                <p class="text-md md:text-xl text-white tracking-wide drop-shadow-lg capitalize">
                  Immerse yourself in the beauty of sustainable fashion, where conscious choices meet impeccable style.
                </p>
                <a href="{{ route("register") }}" class="contactButton text-base lg:text-xl">
                  Get started
                  <div class="iconButton">
                    <svg
                      height="24"
                      width="24"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
            </div>
            <div class="swiper-slide swiper_slide_two flex flex-col items-center justify-center">
              <div class="mx-auto max-w-[1520px] flex flex-col items-center justify-center gap-8 text-center w-[80%] lg:w-[50%]">
                <h1
                  class="text-3xl lg:text-6xl text-white font-bold drop-shadow-lg capitalize leading-snug"
                >
                invest in the tapestry of success!
                </h1>
                <p class="text-md md:text-xl text-white tracking-wide drop-shadow-lg capitalize">
                  Discover how investing in state-of-the-art solutions can position your business at the forefront of innovation, enhancing efficiency and competitiveness.
                </p>
                <a href="{{ route("register") }}" class="contactButton text-base lg:text-xl">
                  Get started
                  <div class="iconButton">
                    <svg
                      height="24"
                      width="24"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
            </div>
            <div class="swiper-slide swiper_slide_three flex flex-col items-center justify-center">
              <div class="mx-auto max-w-[1520px] flex flex-col items-center justify-center gap-8 text-center w-[80%] lg:w-[50%]">
                <h1
                  class="text-3xl lg:text-6xl text-white font-bold drop-shadow-lg capitalize leading-snug"
                >
                unveiling the essence of africa
                </h1>
                <p
                  class="text-md md:text-xl text-white tracking-wide drop-shadow-lg capitalize"
                >
                We are unveiling the Essence of Africa - From Fashion to Real Estate, tourism and lots more!
                </p>
                <a href="{{ route("register") }}" class="contactButton text-base lg:text-xl">
                  Get started
                  <div class="iconButton">
                    <svg
                      height="24"
                      width="24"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination">
            <i class="bi bi-dot"></i>
          </div>

          <!-- If we need navigation buttons -->
          <!-- <div class="swiper-button-prev"></div> -->
          <!-- <div class="swiper-button-next"></div> -->
          <!-- If we need scrollbar -->
          <div class="swiper-scrollbar"></div>
        </div>
    </main>

      <section>
        <div class="flex flex-col relative h-[100vh] lg:h-[400px]">
          <div class="h-[100%] lg:h-[50%] min-w-full lg:min-w-[1200px] lg:max-w-[1520px] mx-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-10 text-center border-[lime]">
            <a href="{{ route("register") }}" class="bg-white p-5 rounded-3xl flex flex-col items-center justify-center shadow-lg w-[80%] md:w-full mx-auto">
              <div class="flex flex-col gap-2">
                <img class="h-10 lg:h-20" src="{{ asset("landing/images/noto_money-bag.svg") }}" alt="noto_money-bag">
                <span class="text-lg lg:text-xl font-bold">Earn Big</span>
              </div>
              <p class="text-sm md:text-base lg:w-[80%] mx-auto text-gray-500">
                Enjoy mouth watery bonuses such as cash bonuses worth millions, cars, monthly allowance and many more!
              </p>
            </a>
            <a href="{{ route("invest") }}" class="bg-white p-5 rounded-3xl flex flex-col items-center justify-center shadow-lg w-[80%] md:w-full mx-auto">
              <div class="flex flex-col gap-2">
                <img class="h-10 lg:h-20" src="{{ asset("landing/images/fluent-emoji-flat_dollar-banknote.svg") }}" alt="fluent-emoji-flat_dollar-banknote">
                <span class="text-lg lg:text-xl font-bold">Invest</span>
              </div>
              <p class="text-sm md:text-base lg:w-[80%] mx-auto text-gray-500">
                Empowering individuals while proudly preserving Africa's cultural heritage across tourism, products, and heritage.
              </p>
            </a>
            <a href="/" class="bg-white p-5 rounded-3xl flex flex-col items-center justify-center shadow-lg w-[80%] md:w-full mx-auto">
              <div class="flex flex-col gap-2">
                <img class="h-10 lg:h-20" src="{{ asset("landing/images/noto-v1_shopping-cart.svg") }}" alt="noto-v1_shopping-cart">
                <span class="text-lg lg:text-xl font-bold">Shop Easy</span>
              </div>
              <p class="text-sm md:text-base lg:w-[80%] mx-auto text-gray-500">
                Shop for high quality fabrics that are perfectly designed and crafted to suit any purpose
              </p>
            </a>
          </div>

          <div class="bg-[#FFA33D] h-full lg:h-[60%]">
            <h1 class="text-center text-2xl lg:text-3xl text-white mt-6 font-bold hidden md:block capitalize lg:w-[50%] mx-auto">step into paulano graceland - where african elegance meets entrepreneurial excellence</h1>
          </div>

          <div class="lg:h-[40%]">
          </div>
        </div>
      </section>

    <section>
      <div class="flex flex-col lg:flex-row gap-10 lg:mt-10 max-w-[1520px] mx-auto lg:h-[500px] w-full ">
        <div data-scroll class="h-full w-full basis-1/2 animate__animated animate__slow">
          <img src="{{ asset("landing/images/slider1.jpg") }}" alt="africa print" class="w-full h-full object-cover">
        </div>
        <div class="flex flex-col gap-4 basis-1/2 px-5 lg:pe-20 banner2 animate__animated animate__zoomInn">
          <h1 class="text-3xl lg:text-5xl text-[#283618] font-bold"><span class="text-[#FC8400]">Welcome</span> to RISING HEIGHT PAVILLION</h1>
          <p class="text-base lg:text-lg leading-snug">
            At Paulano Graceland, we invite you to embark on a journey where culture, creativity, and commerce converge to create a tapestry of unparalleled elegance. Immerse yourself in the vibrant colors, intricate patterns, and timeless designs that define our curated collection. <br><br> From exquisite fabrics to handcrafted treasures, each product narrates a story of African heritage, waiting to be shared with the world.
          </p>
          <button>
            <a href="{{ route("register") }}">
              <button class="button2 py-2 px-5">Join the community</button>
            </a>
          </button>
        </div>
      </div>
    </section>

    <section>
      <div class="max-w-[1520px] mx-auto px-5 lg:px-20 py-[3rem] lg:py-[6rem]">
        <div class="flex flex-col gap-10">
            <h1 class="text-3xl lg:text-5xl text-[#283618] font-bold text-center"><span class="text-[#FC8400]">Our</span> Ecosystem</h1>
            <p class="text-black text-base lg:text-lg text-center leading-snug p-5 lg:p-0 mx-auto">
              Welcome to the heart of our thriving ecosystem at Paulano Graceland, where diversity meets opportunity, and passions are cultivated. Here, we seamlessly blend various facets to create a holistic experience that transcends boundaries. Explore the key elements of our ecosystem
            </p>
        </div>
        <div data-scroll id="ecosystem" class="grid grid-cols-1 md:grid-cols-3 pt-[3rem] gap-6 animate__animated animate__slow">
        </div>
      </div>
    </section>

    <section>
      <div class="flex flex-col gap-10 py-[3rem] lg:py-[6rem]">
          <h1 class="text-3xl lg:text-5xl text-[#283618] font-bold text-center"><span class="text-[#FC8400]">Our</span> Products</h1>

          <div data-scroll class="swiper bbg-[gold] w-full lg:max-w-[700px] mx-auto max-h-[500px] animate__animated animate__slow shawdow-lg">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" id="slider">
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination">
              <i class="bi bi-dot"></i>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div>
        <div class="gallery grid grid-cols-2 lg:grid-cols-4 hidden">
          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/A Detour to the MarketSteemit.jpg") }}" alt="A Detour">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/African Fabric Retailer,Wholesaler and Manufacturer from New York _ Online Fabric Store.jpg") }}" alt="online fabric">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/African Fabric Retailer,Wholesaler and Manufacturer from New YorkOnline Fabric Store (2).jpg") }}" alt="fabric retailer">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/African Fabric Retailer,Wholesaler and Manufacturer from New YorkOnline Fabric Store (3).jpg") }}" alt="fabric retailer 2">
          </div>
          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/african-wax-print-fabric-backgro.jpg") }}" alt="backgro">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/Cloth for sale in Ghana West Africa_.jpg") }}" alt="clothes for sale">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/more kangas.jpg") }}" alt="kente clothe african">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/Fancy African Fabric by the Yard, Metallic Kente Ankara Print, Dressmaking, Cotton Quilting, S.jpg") }}" alt="metaliic">
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-5 lg:px-20 py-[3rem] lg:py-[6rem] max-w-[1520px] mx-auto">
        <div data-scroll class="flex flex-col gap-4 animate__animated animate__slow">
          <h1 class="text-3xl lg:text-5xl text-[#283618] font-bold"><span class="text-[#FC8400]">Earn</span> Amazing Rewards and Compensations</h1>
          <p class="text-base lg:text-lg leading-snug">
            We are a  leading fabric retail firm, and we offer high-quality fabrics that are perfect for any project, whether you're a fashion designer, an interior decorator, or a DIY enthusiast. We are a  leading fabric retail firm, and we offer high-quality fabrics that are perfect for any project, whether you're a fashion designer, an interior decorator, or a DIY enthusiast.
          </p>
          <button>
            <a href="{{ route("register") }}">
              <button class="button2 py-2 px-5">Join the community</button>
            </a>
          </button>
        </div>
        <div data-scroll="" class="gallery grid grid-cols-2 -my-[1rem] -mx-[1rem] w-full animate__animated animate__slow">

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/cashout.jpg") }}" alt="cashout">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/redCar.jpg") }}" alt="redCar">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/washingMachine.jpg") }}" alt="washingMachine">
          </div>

          <div class="gallery-item">
            <img class="gallery-image" src="{{ asset("landing/images/home.jpg") }}" alt="home">
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#FFA33D]">
      <div
        class="flex flex-col items-center justify-center text-center gap-6 px-5 py-[3rem] lg:py-[6rem] max-w-[1520px] mx-auto w-full"
      >
        <h1 data-scroll class="text-3xl lg:text-5xl font-extrabold text-white capitalize text-[#283618]"
        >
          our packages
        </h1>
        <p data-scroll class="text-black text-base lg:text-lg lg:w-[80%] leading-snug p-5 lg:p-0">
          The compensation plan, utilizing a 2-by-2 matrix, offers escalating
          bonuses across different membership tiers (Silver, Gold, Platinum,
          VIP1, VIP2, VIP3, VIP4). Each tier entails specific registration fees,
          matrix structures, and rewards, encouraging progression through stages
          and offering a blend of monetary rewards and enticing incentives like
          gifts, trips, and cars.
        </p>
      </div>
    </section>

    <section>
      <div
        class="w-full py-[3rem] lg:py-[6rem] max-w-[1520px] mx-auto"
      >
        <div data-scroll id="myPackage" class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-5 lg:px-20 animate__animated animate__slow"></div>
      </div>
    </section>

    <section>
      <div class="flex flex-col gap-10 py-[3rem] lg:py-[6rem]">
          <h1 class="text-3xl lg:text-5xl text-[#283618] font-bold text-center"><span class="text-[#FC8400]">Our</span> Gallery</h1>

        <div id="gallery" class="gallery grid grid-cols-2 lg:grid-cols-5 min-w-full lg:min-w-[1400px]">
        </div>
      </div>
    </section>


    <section class="bg-[#f8f8f8]">
      <div class="flex flex-col gap-4 lg:gap-8 items-center justify-center py-[3rem] lg:py-[6rem] max-w-[1520px] mx-auto px-5 md:px-20">
      <h1 class="capitalize text-2xl lg:text-4xl font-extrabold text-[#283618] text-center">community and collaboration</h1>
      <p class="text-base lg:text-lg lg:w-[80%] leading-snug p-5 lg:p-0 text-center mx-auto">Join a thriving community of like-minded individuals who share a passion for Africa's beauty and entrepreneurial spirit. Collaborate, learn, and grow together, fostering a supportive network that transcends geographic boundaries</p>
      <button>
        <a href="{{ route("register") }}">
          <button class="button2 py-2 px-5">Join the community</button>
        </a>
      </button>
      </div>
    </section>

    <section>
      <div
        class="w-full flex items-center justify-center py-[3rem] lg:py-[6rem] max-w-[1520px] mx-auto px-5"
      >
        <div class="basis-1/4 hidden lg:flex justify-center">
          <img src="{{ asset("landing/images/svgelement.svg") }}" alt="" />
        </div>
        <div
          class="lg:basis-1/2 flex flex-col gap-8 items-center text-center lg:w-[80%]"
        >
          <h1 class="text-2xl lg:text-4xl text-[#283618] font-extrabold">
            Paulano Graceland your Gateway to Financial Freedom and Wealth
          </h1>
          <p class="text-base lg:text-md lg:w-[80%]">
            What are you waiting for? Choose a plan today and let us take your
            financial life to the next level
          </p>
          <a
            href="{{ route("register") }}"
            class="w-[50%] py-4 bg-[#fc8400] hover:bg-[#fdaa4f] text-[#fefae0] text-sm lg:text-md font-bold rounded-full hidden"
          >
            Get started
          </a>
          <button>
            <a href="{{ route("register") }}">
              <button class="button2 p-3 min-w-[200px] md:min-w-[300px] rounded-full">Register now</button>
            </a>
          </button>
        </div>
        <div class="basis-1/4 hidden lg:flex justify-center">
          <img src="{{ asset("landing/images/svgelement2.svg") }}" alt="" />
        </div>
      </div>
    </section>

    <footer class="bg-black">
      <div class="py-[3rem] lg:py-[6rem] max-w-[1520px] mx-auto px-5">
        <div
          class="flex flex-col lg:flex-row lg:justify-between gap-8 lg:gap-0 flex-wrap"
        >
          <a href="{{ route("landing") }}">
            <img
              class="w-[150px] lg:w-[180px]"
              src="{{ asset("landing/images/logo.png") }}"
              alt="logo"
            />
          </a>

          <div class="flex flex-col gap-4">
            <h1 class="uppercase text-[#fc8400] text-md font-bold">Company</h1>
            <ul class="capitalize flex flex-col gap-2 text-sm text-[#fefae0]">
              <li>
                <a href="{{ route("about") }}">about</a>
              </li>
              <li>
                <a href="{{ route("help") }}" target="_blank">contact us</a>
              </li>
              <li>
                <a href="https://eu.docworkspace.com/d/sINr3pIhn9cXMrAY" target="_blank">policy</a>
              </li>
            </ul>
          </div>

          <div class="flex flex-col gap-4">
            <h1 class="uppercase text-[#fc8400] text-md font-bold">
              Quick links
            </h1>
            <ul class="capitalize flex flex-col gap-2 text-sm text-[#fefae0]">
              <li>
                <a href="{{ route("plan") }}">compensation plan</a>
              </li>
              <li>
                <a href="{{ route("invest") }}">Invest in paulano graceland</a>
              </li>
              <li>
                <a href="{{ route("login") }}">login to dashboard</a>
              </li>
              <li>
                <a href="{{ route("register") }}">register now</a>
              </li>
            </ul>
          </div>

          <div class="flex flex-col gap-4">
            <h1 class="uppercase text-[#fc8400] text-md font-bold">
              Contact us
            </h1>
            <ul class="flex flex-col gap-2 text-sm text-[#fefae0]">
              <li>
                <a href="mailto:support@paulanogracelandafrica.com">support@paulanogracelandafrica.com</a>
              </li>
              <li>
                <a href="tel:+2348064791719">+234 80 6479 1719</a>
              </li>
              <li>
                <address>24 Ekololu, Surulere Lagos State</address>
              </li>
            </ul>
          </div>

          <div class="flex flex-col gap-4">
            <h1 class="uppercase text-[#fc8400] text-md font-bold">
              Social media
            </h1>
            <ul class="capitalize flex flex-col gap-2 text-sm text-[#fefae0]">
              <li>
                <a
                  href="https://www.instagram.com/everything_pgland/"
                  target="_blank"
                >
                  <i class="bi bi-instagram"></i>
                  <span>Instagram</span>
                </a>
              </li>
              <li>
                <a
                  href="https://wa.me/2348066780133"
                  target="_blank"
                >
                  <i class="bi bi-whatsapp"></i>
                  <span>+234 80 6678 0133</span>
                </a>
                <li>
                  <a
                    href="https://wa.me/2349151601046"
                    target="_blank"
                  >
                    <i class="bi bi-whatsapp"></i>
                    <span>+234 91 5160 1046</span>
                  </a>
                </li>
              </li>
              <li>
                <a
                  href="https://www.facebook.com/profile.php?id=61554287084432"
                  target="_blank"
                >
                  <i class="bi bi-facebook"></i>
                  <span>Facebook</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="flex flex-col gap-4 text-[#fefae0] max-w-[400px]">
            <h1 class="uppercase text-[#fc8400] text-md font-bold">
              NewsLetter
            </h1>
            <span
              >Subscribe to our newsletter to get all our news in your
              inbox.</span
            >
            <div class="input-group">
              <input
                type="email"
                class="input"
                id="Email"
                name="Email"
                placeholder="name@email.com"
                autocomplete="off"
              />
              <button class="bg-[#fc8400] p-3 rounded-r-xl">
                Subscribe
              </button>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset("landing/app.js") }}"></script>
    <script>
      const swiper = new Swiper(".swiper", {
        // Optional parameters
        direction: "horizontal",
        loop: true,
        autoplay: {
          delay: 6000,
        },

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        // And if we need scrollbar
        scrollbar: {
          el: ".swiper-scrollbar",
        },
      });


var el2 = document.querySelector(".banner2");
el2.setAttribute('data-scroll', '');

ScrollOut({
    onShown: function(el2) {
    // remove the class
    el2.classList.remove("animate__zoomIn");

    // force reflow
    void el2.offsetWidth;

    // re-add the animated cl
    el2.classList.add("animate__zoomIn");
  }
});
      const ecosystemArray = [
        {
          title: "fashion",
          content: "Experience the vibrancy and elegance of African fashion through our carefully curated collections. From traditional craftsmanship to contemporary trends, each piece tells a story, allowing you to adorn yourself in the rich tapestry of our culture",
          icon: "",
          img: "landing/images/fashion.jpg",
        },

        {
          title: "tourism",
          content: "Embark on unforgettable adventures with our bespoke tourism packages. We invite you to explore the wonders of Africa, from the ancient mysteries to modern marvels, ensuring every journey is a celebration of diverse landscapes and cultural treasures",
          icon: "",
          img: "landing/images/tourism.jpg",
        },
        {
          title: "real estate",
          content: "Embark on a journey to discover exclusive real estate opportunities that marry luxury with cultural authenticity. Our curated selection showcases unique properties, inviting you to invest in the vibrant soul of Africa",
          icon: "",
          img: "landing/images/realestate.jpg",
        },
        {
          title: "african art & craft",
          content: "Immerse yourself in the creativity of African artisans. Our platform is a canvas for authentic African art and craft, allowing you to bring home the spirit of Africa through unique handmade treasures that embody the essence of cultural heritage",
          icon: "",
          img: "landing/images/artncraft.jpg",
        },
        {
          title: "training and empowerment",
          content: "Paulano Graceland is more than a marketplace; it's a hub for learning and growth. Engage in comprehensive training programs that empower you to succeed in your entrepreneurial journey. We believe in nurturing talents, fostering skills, and unlocking the doors to limitless possibilities",
          icon: "",
          img: "landing/images/empowerment.jpg",
        },
        {
          title: "e-commerce",
          content: "Our commitment to excellence is reflected in our carefully curated selection of products, coupled with a user-friendly interface that ensures a hassle-free shopping journey. Explore the world of possibilities with our e-commerce offerings, where you can discover the latest trends, unique finds, and exclusive deals.",
          icon: "",
          img: "landing/images/commerce.jpg",
        }
      ]
      const ecosystemContainer = document.getElementById("ecosystem");
      const ecosystemHTML = ecosystemArray
        .map(
          (item, index) => `
          <div class="flex flex-col max-h-[600px] hover:shawdow-lg rounded-2xl shadow-md">
            <img class="h-[50%] object-cover" src="${item.img}" alt=${item.title}>
            <div class="flex flex-col gap-2 text-center p-3">
              <i class="bi bi-check2-square text-[#fc8400] text-2xl md:text-4xl"></i>
              <h1 class="text-xl md:text-2xl font-bold capitalize">${item.title}</h1>
              <p class="text-sm">${item.content}</p>
              <button>
        <a href="{{ route("register") }}">
          <button class="button2 py-2 px-5 text-sm">Get Started</button>
        </a>
      </button>
            </div>
          </div>
        `).join("");

      ecosystemContainer.innerHTML = ecosystemHTML;

      const sliderArray = [
        {
          img: 'landing/images/slide1.jpg',
          name: 'slide1',
        },
        {
          img: 'landing/images/slide2.jpg',
          name: 'slide2',
        },
        {
          img: 'landing/images/slide3.jpg',
          name: 'slide3',
        },
        {
          img: 'landing/images/slide4.jpg',
          name: 'slide4',
        },
        {
          img: 'landing/images/slide5.jpg',
          name: 'slide5',
        },
        {
          img: 'landing/images/slide6.jpg',
          name: 'slide6',
        },
        {
          img: 'landing/images/slide7.jpg',
          name: 'slide7',
        },
        {
          img: 'landing/images/slide8.jpg',
          name: 'slide8',
        },
        {
          img: 'landing/images/slide9.jpg',
          name: 'slide9',
        },
        {
          img: 'landing/images/slide10.jpg',
          name: 'slide10',
        },
        {
          img: 'landing/images/slide11.jpg',
          name: 'slide11',
        },
        {
          img: 'landing/images/slide12.jpg',
          name: 'slide12',
        },
      ]
      const sliderContainer = document.getElementById("slider");
      const sliderHTML = sliderArray
        .map(
          (item, index) => `
          <div class="swiper-slide h-full w-full">
            <img class="object-cover h-full w-full" src="${item.img}" alt="${item.name}">
          </div>
        `).join("");

      sliderContainer.innerHTML = sliderHTML;

      const packageArray = [
        {
          id: 1,
          name: "Bronze Package",
          amount: 15000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn over N300,000 in level",
            "Stage and stepout bonuses in this 2 by 2 matrix",
          ],
        },
        {
          id: 2,
          name: "Silver Package",
          amount: 25000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn over N800,000 in level",
            "Stage and stepout bonuses in this 2 by 2 matrix",
          ],
        },
        {
          id: 3,
          name: "Gold Package",
          amount: 50000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn over N1,200,000 in level",
            "Stage and stepout bonuses in this 2 by 2 matrix",
          ],
        },
        {
          id: 4,
          name: "Platinum Package",
          amount: 100000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn over N500,000,000 in level",
            "Stage and stepout bonuses in this 2 by 2 matrix",
          ],
        },
        {
          id: 5,
          name: "VIP Package",
          amount: 200000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn amazing cash bonuses plus a car worth 8 million naira",
            "5 months allowance worth N200,000 monthly",
          ],
        },
        {
          id: 6,
          name: "VIP 2 Package",
          amount: 500000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn amazing cash bonuses plus a Jeep worth 10 million naira",
            "10 months allowance worth N200,000 monthly",
          ],
        },
        {
          id: 7,
          name: "VIP 3 Package",
          amount: 1000000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn amazing cash bonuses plus a car worth 15 million naira",
            "Cash support of N2 Million naira",
          ],
        },
        {
          id: 8,
          name: "VIP 4 Package",
          amount: 2000000,
          details:
            "Enjoy a whooping #3000 earnings and other incentives on the bronze package",
          lists: [
            "Earn amazing cash bonuses plus a car worth 25 million naira",
            "Cash support of N5 Million naira",
          ],
        },
      ];

      const myPackageContainer = document.getElementById("myPackage");
      const myPackageHTML = packageArray
        .map(
          (obj) => `
    <div class="cards__inner shadow-lg">
    <div class="cards__card card">
      <p class="card__heading">${obj.name}</p>
      <p class="card__price">${new Intl.NumberFormat("en-NG", {
        style: "currency",
        currency: "NGN",
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
      }).format(obj.amount)}</p>
      <ul class="card_bullets flow" role="list">
        ${obj.lists
          .map(
            (list) => `<li class="capitalize">${list}</li>
          `
          )
          .join("")}
      </ul>
      <a class="card__cta cta" href="{{ route("register") }}">Get Started</a>
    </div>
    <div class="overlay cards__inner"></div>
    </div>
    `).join("");
    myPackageContainer.innerHTML = myPackageHTML;

    const galleryArray = [
      {
        img: "https://img.freepik.com/free-photo/portrait-black-young-man-wearing-african-traditional-red-colorful-clothes_627829-4902.jpg?w=1380&t=st=1705488482~exp=1705489082~hmac=64b221680ddf8b6acc3f3a09148d431588b2b031c0d7c57d9c753b4df581f445",
        name: "slide1"
      },{
        img: "https://img.freepik.com/free-photo/enthusiastic-african-american-woman-trendy-coloured-outfit-with-red-beret-chilling-cozy-cafe_627829-5866.jpg?w=1380&t=st=1705488564~exp=1705489164~hmac=716db10e1278a15fa781b3b3d48a51716a058900882d5259ccb52c7ec176c2d1",
        name: "slide2"
      },
      {
        img: "https://img.freepik.com/free-photo/portrait-women-posing-traditional-african-attire-outdoors_23-2150572655.jpg?w=740&t=st=1705488643~exp=1705489243~hmac=99144edc523000bd758fb114ca0a4833215ed5a477a1e1c410fda4384b800580",
        name: "slide3"
      },
      {
        img: "https://img.freepik.com/free-photo/amazing-african-american-model-woman-green-pants-black-hat-posed-with-different-emotions-park_627829-14440.jpg?w=1380&t=st=1705488768~exp=1705489368~hmac=357f914f8e1027aec7041b5928407a5a2604b7d0499beb916032fdba75203795",
        name: "slide4"
      },
      {
        img: "https://img.freepik.com/free-photo/stylish-trendy-afro-france-man-red-hat-white-outfit-posed-autumn-day-black-african-model-guy_627829-5159.jpg?w=1380&t=st=1705488787~exp=1705489387~hmac=740d69b82a6026f464b362e0d56b12c015db9343d8b7175df364374f8bf3a622",
        name: "slide5"
      },
      {
        img: "https://img.freepik.com/free-photo/front-view-smiley-couple-making-plans-redecorate-house-with-laptop_23-2148814375.jpg?w=1380&t=st=1705488910~exp=1705489510~hmac=a26bce7c15addd1035f9aac573e1f713db3f9ab7e2dd92e8485295bd53bb9f08",
        name: "slide6"
      },
      {
        img: "https://img.freepik.com/free-photo/city-sunset_1127-4032.jpg?w=1380&t=st=1705488886~exp=1705489486~hmac=e163ba73d0f5ff1a45527b1d75c59fbe74e4bc600457ee3054ae93b7aad6a797",
        name: "slide7"
      },
      {
        img: "https://img.freepik.com/free-photo/aerial-view-rural-landscape-long-shot_23-2148346100.jpg?w=1380&t=st=1705488872~exp=1705489472~hmac=941cb68145b077d5f06a22ce9d935669005348213251867dd1affdff9e7d607b",
        name: "slide8"
      },
      {
        img: "https://img.freepik.com/free-photo/black-businessman-happy-expression_1194-2795.jpg?w=1380&t=st=1705488860~exp=1705489460~hmac=55326ddeedfe4aaeef5abf2fe3911ae037a72a65202e09168a6a0c5b463e3513",
        name: "slide9"
      },
      {
        img: "https://img.freepik.com/free-photo/happy-african-american-lady-safety-helmet-eyeglasses-near-building-construction_23-2148039962.jpg?w=1380&t=st=1705488846~exp=1705489446~hmac=d1e1f7a1785b3712916c575e5978d2bbf60b3b9dcfb5bd07ebec290cf39f31ce",
        name: "slide10"
      },
      {
        img: "https://img.freepik.com/free-photo/closeup-shot-beautiful-young-ladies-using-laptop_181624-44767.jpg?w=1380&t=st=1705489067~exp=1705489667~hmac=da70c82cb563c37724e0f1d782675b4d788cf65f90ea528274a0e3aec7ed42ee",
        name: "slide11"
      },{
        img: "https://img.freepik.com/free-photo/two-women-viewing-content-phone-local-african-market_181624-35124.jpg?w=1380&t=st=1705489044~exp=1705489644~hmac=ecaeffadbcbcd9d6781923ee24f27b80656ab14ff34961682217985f3461caa6",
        name: "slide12"
      },
      {
        img: "https://img.freepik.com/free-photo/medium-shot-black-woman-running-small-business_23-2150171824.jpg?w=1380&t=st=1705489085~exp=1705489685~hmac=dfe9a0d3b90eb0ec74c3a5e85f184f3127deab3eec65a4faa5e9c551801b59fd",
        name: "slide13"
      },
      {
        img: "https://img.freepik.com/free-photo/medium-shot-senior-black-woman-posing_23-2150247845.jpg?w=1380&t=st=1705489246~exp=1705489846~hmac=f28b4ebfd999d55334c995abde24d648cb531e6d825aced0c9dcbdf9e6e0f2ef",
        name: "slide14"
      },
      {
        img: "https://img.freepik.com/free-photo/handsome-black-man-is-engaged-gym_1157-21919.jpg?w=1380&t=st=1705489222~exp=1705489822~hmac=c51ee2e87f2c5f93048cba26dcaab2a1e4d948b344560deb27c061e23cb776d7",
        name: "slide15"
      },
      {
        img: "https://img.freepik.com/free-vector/flat-geometric-background_23-2149329357.jpg?w=1380&t=st=1705489500~exp=1705490100~hmac=455dbab1298c52bd6cce30417c7e2939880c2fc44b565cff15cc39b9c7d5ce9d",
        name: "slide16"
      },
      {
        img: "https://img.freepik.com/free-photo/smiley-man-posing-with-hat-medium-shot_23-2148761612.jpg?w=1380&t=st=1705489446~exp=1705490046~hmac=c704b4436213db31fcd96a900b0468d77d76a22e241cc1f4b215ed11f14727f9",
        name: "slide17"
      },
      {
        img: "https://img.freepik.com/free-photo/medium-shot-smiley-woman-cooking_23-2148761570.jpg?w=1380&t=st=1705489408~exp=1705490008~hmac=5ead8daf7347785e49d0ed433ae1c62fa3649a8b036b4e08135b3529d6ffad1b",
        name: "slide18"
      },
      {
        img: "https://img.freepik.com/free-photo/professional-artisan-job-workshop_23-2148801652.jpg?w=1380&t=st=1705489380~exp=1705489980~hmac=9d3ca909b4753440fa06053c53c2c60929d7a7cfc069e207536703b1dc78dcee",
        name: "slide19"
      },
      {
        img: "https://img.freepik.com/free-vector/africa-jungle-ethnic-tribe-travel-seamless-pattern-vector-illustration_1284-2774.jpg?w=900&t=st=1705489332~exp=1705489932~hmac=8c90e70d5d07a9b5d4245cc56eebd54fa6dd5441e86713df56cad3ab136e0649",
        name: "slide20"
      }
    ]

    const galleryContainer = document.getElementById("gallery");
      const galleryHTML = galleryArray
        .map(
          (item, index) => `
          <div class="gallery-item">
            <img class="gallery-image object-cover object-center" src="${item.img}" alt=${item.name}>
          </div>
        `).join("");

      galleryContainer.innerHTML = galleryHTML;



       // Get the button
    var scrollToTopButton = document.getElementById("scrollToTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    }

    // Scroll to the top of the document when the button is clicked
    function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
  </body>
</html>
