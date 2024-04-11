<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite App</title>
  <script type="module" crossorigin src="{{ asset('js/index.js') }}"></script>
  <link rel="stylesheet" crossorigin href="{{ asset('css/index.css') }}">
</head>

<body class="overflow-x-hidden">
    <header>
        <div class="navbar bg-base-100 shadow-lg rounded-3xl fixed z-10">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Homepage</a></li>
                        <li><a>Portfolio</a></li>
                        <li><a>About</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-center">
                <a class="btn btn-ghost text-xl">daisyUI</a>
            </div>
        </div>
    </header>
    <div id="cursor"></div>
    <main>
        <div class="w-full min-h-16"> </div>
        <section class="">
            <div id="mute" class="btn">
                biseda
            </div>


            <div class="w-28 h-28 bg-[#f9dc03c7] blur-3xl absolute right-96 top-28 hidden lg:block rounded-badge"></div>
            <div class="w-44 h-28 bg-[#f9d403ce] blur-3xl absolute left-12 bottom-48 hidden lg:block rounded-badge"></div>
            


            <!-- sliders -->
            <div class="flex justify-center items-centers mx-10 flex-col lg:flex-row">
                <div class="swiper w-72 h-72 rounded-full image">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <img class="swiper-slide"
                            src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
                        <img class="swiper-slide"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt="Shoes" />
                        <img class="swiper-slide"
                            src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" />
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need scrollbar -->
                </div>
                <!-- slider -->

                <div class="flex justify-center items-center">
                    <div class="p-6 min-h-max container">
                        <div class="flex max-w-7xl flex-col gap-2 items-center justify-center">
                            <!-- TODO: replace these two tags in english -->
                            <div class="text-center p-2">
                                <h1 class="text-4xl font-bold ln mb-3 welcome" dir="rtl">خوش آمدید</h1>
                                <p class="welcome mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl"
                                    dir="rtl">
                                    به این سایت دمو خوش آمدیدما ایجا در میفروشیم و عاشق در هستیم ما
                                    دوست داریم کمک کنیم و خیلی کمک کنیم که در خدتون رو پیدا کنیم
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="bg-[#F9DB03] pb-12">
            <div class="">
                <svg id="visual" viewBox="0 0 900 200" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                    <g>
                        <path
                            d="M0 113L22.8 113.8C45.7 114.7 91.3 116.3 137 128C182.7 139.7 228.3 161.3 274 166.8C319.7 172.3 365.3 161.7 411.2 156.3C457 151 503 151 548.8 156C594.7 161 640.3 171 686 165C731.7 159 777.3 137 823 136.2C868.7 135.3 914.3 155.7 937.2 165.8L960 176L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fde461" id="blob3"></path>
                        <path
                            d="M0 95L22.8 99.7C45.7 104.3 91.3 113.7 137 112C182.7 110.3 228.3 97.7 274 97C319.7 96.3 365.3 107.7 411.2 114.5C457 121.3 503 123.7 548.8 123.8C594.7 124 640.3 122 686 123.3C731.7 124.7 777.3 129.3 823 126.2C868.7 123 914.3 112 937.2 106.5L960 101L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffec98" id="blob5"></path>
                        <path
                            d="M0 70L22.8 69.5C45.7 69 91.3 68 137 67.8C182.7 67.7 228.3 68.3 274 65.5C319.7 62.7 365.3 56.3 411.2 58C457 59.7 503 69.3 548.8 69.8C594.7 70.3 640.3 61.7 686 63.7C731.7 65.7 777.3 78.3 823 82.2C868.7 86 914.3 81 937.2 78.5L960 76L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fff5cc" id="blob7"></path>
                        <path
                            d="M0 47L22.8 44C45.7 41 91.3 35 137 32.3C182.7 29.7 228.3 30.3 274 31.8C319.7 33.3 365.3 35.7 411.2 37.8C457 40 503 42 548.8 41.7C594.7 41.3 640.3 38.7 686 35.2C731.7 31.7 777.3 27.3 823 30.2C868.7 33 914.3 43 937.2 48L960 53L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffffff" id="blob9"></path>
                    </g>
                    <g style="visibility: hidden">
                        <path
                            d="M0 79L22.8 78.5C45.7 78 91.3 77 137 96.8C182.7 116.7 228.3 157.3 274 174.3C319.7 191.3 365.3 184.7 411.2 172.5C457 160.3 503 142.7 548.8 133.5C594.7 124.3 640.3 123.7 686 115.7C731.7 107.7 777.3 92.3 823 85C868.7 77.7 914.3 78.3 937.2 78.7L960 79L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fde461" id="blob4"></path>
                        <path
                            d="M0 26L22.8 41.5C45.7 57 91.3 88 137 91.7C182.7 95.3 228.3 71.7 274 72.5C319.7 73.3 365.3 98.7 411.2 102.7C457 106.7 503 89.3 548.8 83.3C594.7 77.3 640.3 82.7 686 77.5C731.7 72.3 777.3 56.7 823 56.7C868.7 56.7 914.3 72.3 937.2 80.2L960 88L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffec98" id="blob6"></path>
                        <path
                            d="M0 123L22.8 111.3C45.7 99.7 91.3 76.3 137 71C182.7 65.7 228.3 78.3 274 73.3C319.7 68.3 365.3 45.7 411.2 38.3C457 31 503 39 548.8 45.5C594.7 52 640.3 57 686 64.5C731.7 72 777.3 82 823 81.7C868.7 81.3 914.3 70.7 937.2 65.3L960 60L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fff5cc" id="blob8"></path>
                        <path
                            d="M0 34L22.8 41.7C45.7 49.3 91.3 64.7 137 64.8C182.7 65 228.3 50 274 47.5C319.7 45 365.3 55 411.2 59.3C457 63.7 503 62.3 548.8 59.7C594.7 57 640.3 53 686 47.3C731.7 41.7 777.3 34.3 823 38.8C868.7 43.3 914.3 59.7 937.2 67.8L960 76L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffffff" id="blob10"></path>
                    </g>
                </svg>
                <div class="flex justify-center">
                    <ul
                        class="px-5 container hide-scrollbar overflow-x-auto gap-5 overflow-y-hidden flex flex-nowrap py-3 justify-stretch overflow-hidden">
                        <a href="" class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                            <div class="card w-56 bg-base-100 shadow-xl">
                                <figure>
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Shoes!
                                        <div class="badge badge-secondary">NEW</div>
                                    </h2>
                                    <p>If a dog chews shoes whose shoes does he choose?</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                            <div class="card w-56 bg-base-100 shadow-xl">
                                <figure>
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Shoes!
                                        <div class="badge badge-secondary">NEW</div>
                                    </h2>
                                    <p>If a dog chews shoes whose shoes does he choose?</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                            <div class="card w-56 bg-base-100 shadow-xl">
                                <figure>
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Shoes!
                                        <div class="badge badge-secondary">NEW</div>
                                    </h2>
                                    <p>If a dog chews shoes whose shoes does he choose?</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                            <div class="card w-56 bg-base-100 shadow-xl">
                                <figure>
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Shoes!
                                        <div class="badge badge-secondary">NEW</div>
                                    </h2>
                                    <p>If a dog chews shoes whose shoes does he choose?</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                            <div class="card w-56 bg-base-100 shadow-xl">
                                <figure>
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Shoes!
                                        <div class="badge badge-secondary">NEW</div>
                                    </h2>
                                    <p>If a dog chews shoes whose shoes does he choose?</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                            <div class="card w-56 bg-base-100 shadow-xl">
                                <figure>
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Shoes!
                                        <div class="badge badge-secondary">NEW</div>
                                    </h2>
                                    <p>If a dog chews shoes whose shoes does he choose?</p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                            <div class="card w-56 bg-base-100 shadow-xl">
                                <figure>
                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                        alt="Shoes" />
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title">
                                        Shoes!
                                        <div class="badge badge-secondary">NEW</div>
                                    </h2>
                                    <p>If a dog chews shoes whose shoes does he choose?</p>
                                </div>
                            </div>
                        </a>
                    </ul>
                </div>
        </section>
        <svg id="visual" viewBox="0 0 900 200" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g>
                <path
                    d="M0 188L21.5 195.5C43 203 86 218 128.8 227.7C171.7 237.3 214.3 241.7 257.2 242.8C300 244 343 242 385.8 234C428.7 226 471.3 212 514.2 198.5C557 185 600 172 642.8 167.3C685.7 162.7 728.3 166.3 771.2 174.3C814 182.3 857 194.7 878.5 200.8L900 207L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffffff" id="lob1"></path>
                <path
                    d="M0 126L21.5 139.2C43 152.3 86 178.7 128.8 187.2C171.7 195.7 214.3 186.3 257.2 186C300 185.7 343 194.3 385.8 189.5C428.7 184.7 471.3 166.3 514.2 158.7C557 151 600 154 642.8 152.3C685.7 150.7 728.3 144.3 771.2 138.2C814 132 857 126 878.5 123L900 120L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fff5cc" id="lob3"></path>
                <path
                    d="M0 88L21.5 97.3C43 106.7 86 125.3 128.8 129.5C171.7 133.7 214.3 123.3 257.2 122.3C300 121.3 343 129.7 385.8 127C428.7 124.3 471.3 110.7 514.2 113C557 115.3 600 133.7 642.8 139C685.7 144.3 728.3 136.7 771.2 128.5C814 120.3 857 111.7 878.5 107.3L900 103L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffec98" id="lob5"></path>
                <path
                    d="M0 82L21.5 79.3C43 76.7 86 71.3 128.8 67C171.7 62.7 214.3 59.3 257.2 58.8C300 58.3 343 60.7 385.8 69.5C428.7 78.3 471.3 93.7 514.2 94.5C557 95.3 600 81.7 642.8 77.5C685.7 73.3 728.3 78.7 771.2 79.2C814 79.7 857 75.3 878.5 73.2L900 71L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fde461" id="lob7"></path>
                <path
                    d="M0 65L21.5 59.5C43 54 86 43 128.8 42.5C171.7 42 214.3 52 257.2 50.8C300 49.7 343 37.3 385.8 32.2C428.7 27 471.3 29 514.2 29.5C557 30 600 29 642.8 32.2C685.7 35.3 728.3 42.7 771.2 42.7C814 42.7 857 35.3 878.5 31.7L900 28L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#f9db03" id="lob9"></path>
            </g>
            <g style="visibility: hidden">
                <path
                    d="M0 217L21.5 207.3C43 197.7 86 178.3 128.8 171C171.7 163.7 214.3 168.3 257.2 177.3C300 186.3 343 199.7 385.8 208.3C428.7 217 471.3 221 514.2 219.8C557 218.7 600 212.3 642.8 206.8C685.7 201.3 728.3 196.7 771.2 187.8C814 179 857 166 878.5 159.5L900 153L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffffff" id="lob2"></path>
                <path
                    d="M0 155L21.5 154.7C43 154.3 86 153.7 128.8 158C171.7 162.3 214.3 171.7 257.2 169.8C300 168 343 155 385.8 147.7C428.7 140.3 471.3 138.7 514.2 134.8C557 131 600 125 642.8 122C685.7 119 728.3 119 771.2 124.2C814 129.3 857 139.7 878.5 144.8L900 150L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fff5cc" id="lob4"></path>
                <path
                    d="M0 144L21.5 140.2C43 136.3 86 128.7 128.8 119.3C171.7 110 214.3 99 257.2 105.5C300 112 343 136 385.8 137.5C428.7 139 471.3 118 514.2 116.8C557 115.7 600 134.3 642.8 137.2C685.7 140 728.3 127 771.2 124.7C814 122.3 857 130.7 878.5 134.8L900 139L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffec98" id="lob6"></path>
                <path
                    d="M0 67L21.5 74.2C43 81.3 86 95.7 128.8 95C171.7 94.3 214.3 78.7 257.2 76.3C300 74 343 85 385.8 84.7C428.7 84.3 471.3 72.7 514.2 66.3C557 60 600 59 642.8 59.2C685.7 59.3 728.3 60.7 771.2 66.2C814 71.7 857 81.3 878.5 86.2L900 91L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fde461" id="lob8"></path>
                <path
                    d="M0 46L21.5 42.7C43 39.3 86 32.7 128.8 35.3C171.7 38 214.3 50 257.2 53.2C300 56.3 343 50.7 385.8 51.5C428.7 52.3 471.3 59.7 514.2 57.5C557 55.3 600 43.7 642.8 38.5C685.7 33.3 728.3 34.7 771.2 39.5C814 44.3 857 52.7 878.5 56.8L900 61L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#f9db03" id="lob10"></path>
            </g>
        </svg>
        <section class="overflow-x-hidden">
            <div class="flex justify-center my-12 w-full items-center ">
                <div class="w-full text-end px-8 container">
                    <h1 class="text-3xl mb-8 font-bold tracking-tight text-gray-900 md:text-center sm:text-4xl/snug md:text-7xl/snug lg:text-5xl/loose welcome wsau text-right"
                        dir="rtl">ویژگی ما چیست؟</h1><br>
                    <p class="wsau text-right" dir="rtl">ما بینظیر ترین درب های دنیا را درست میکنیم و میتوانیم با جرات
                        بگوییم که ما بهترین برچسب ها و
                        باکیفیت تین چوب ها را در ساخت درب های خود به کار میبریم و استفاده میکنیم</p>
                    <p class="wsau text-right" dir="rtl">ما بینظیر ترین درب های دنیا را درست میکنیم و میتوانیم با جرات
                        بگوییم که ما بهترین برچسب ها و
                        باکیفیت تین چوب ها را در ساخت درب های خود به کار میبریم و استفاده میکنیsdfsadfasd fasd fasd f
                        asdf asdf asdfasd fasd fasd fasdh filasdh ifhasuildh failshd م</p>
                    <p class="wsau text-right" dir="rtl">ما بینظیر ترین درب های دنیا را درست میکنیم و میتوانیم با جرات
                        بگوییم که ما بهترین برچسب ها و
                        باکیفیت تین چوب ها را در ساخت درب های خود به کار میبریم و استفاده میکنیم</p>
                    <p class="wsau text-right" dir="rtl">چوب ما بهرتین چوب میباشد</p>
                    <div class="divider divider-primary">تضمین کار ما در</div>
                    <div class="my-16 flex flex-col justify-center items-center lg:flex-row gap-10"
                        data-aos="fade-down-right">
                        <div class="w-48 atropos my-atropos shadow-lg">
                            <!-- scale container (required) -->
                            <div class="atropos-scale">
                                <!-- rotate container (required) -->
                                <div class="atropos-rotate animate-glow">
                                    <!-- inner container (required) -->
                                    <div data-atropos-offset="-10"
                                        class="absolute -bottom-3 -left-7 w-20 h-20 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2 z-30">
                                    </div>
                                    <div data-atropos-offset="-5"
                                        class="absolute -top-6 -right-4 w-24 h-24 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2">
                                    </div>
                                    <div class="atropos-inner">
                                        <div class="relative w-48 h-48 flex justify-center items-center bg-white shadow-black shadow-lg rounded-lg border-black border-2"
                                            data-atropos-offset="0">
                                            <span class="font-extrabold text-6xl" data-atropos-offset="5">1
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center lg:text-end self-center w-full">
                            <h2 class="text-4xl font-bold">کیفیت</h2><br>
                            <p>میتوانید از میزان کیفیت ما با اطمینان حاصل نمایید و نظر مشتریان راضی ما را از زیر بخوانید
                            </p>
                        </div>
                    </div>
                    <div class="my-36 flex flex-col-reverse justify-center items-center lg:flex-row gap-10"
                        data-aos="fade-down-left">
                        <div class="text-center lg:text-start self-center w-full">
                            <h2 class="text-4xl font-bold">خدمات</h2><br>
                            <p>میتوانید از میزان کیفیت ما با اطمینان حاصل نمایید و نظر مشتریان راضی ما را از زیر بخوانید
                            </p>
                        </div>
                        <div class="w-48 atropos my-atropos-2 shadow-lg">
                            <!-- scale container (required) -->
                            <div class="atropos-scale">
                                <!-- rotate container (required) -->
                                <div class="atropos-rotate animate-glow">
                                    <!-- inner container (required) -->
                                    <div data-atropos-offset="-10"
                                        class="absolute -bottom-3 -left-7 w-20 h-20 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2 z-30">
                                    </div>
                                    <div data-atropos-offset="-5"
                                        class="absolute -top-6 -right-4 w-24 h-24 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2">
                                    </div>
                                    <div class="atropos-inner">
                                        <div class="relative w-48 h-48 flex justify-center items-center bg-white shadow-black shadow-lg rounded-lg border-black border-2"
                                            data-atropos-offset="0">
                                            <span class="font-extrabold text-6xl" data-atropos-offset="5">2
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-36 mb-2 flex flex-col justify-center items-center lg:flex-row gap-10"
                        data-aos="fade-down-right">

                        <div class="w-48 atropos my-atropos-3 shadow-lg">
                            <!-- scale container (required) -->
                            <div class="atropos-scale">
                                <!-- rotate container (required) -->
                                <div class="atropos-rotate animate-glow">
                                    <!-- inner container (required) -->
                                    <div data-atropos-offset="-10"
                                        class="absolute -bottom-3 -left-7 w-20 h-20 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2 z-30">
                                    </div>
                                    <div data-atropos-offset="-5"
                                        class="absolute -top-6 -right-4 w-24 h-24 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2">
                                    </div>
                                    <div class="atropos-inner">
                                        <div class="relative w-48 h-48 flex justify-center items-center bg-white shadow-black shadow-lg rounded-lg border-black border-2"
                                            data-atropos-offset="0">
                                            <span class="font-extrabold text-6xl" data-atropos-offset="5">3
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center lg:text-end self-center w-full">
                            <h2 class="text-4xl font-bold">خدمات</h2><br>
                            <p>میتوانید از میزان کیفیت ما با اطمینان حاصل نمایید و نظر مشتریان راضی ما را از زیر بخوانید
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-[#F9DB03] pb-12">
            <div class="">
                <svg id="visual" viewBox="0 0 900 200" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                    <g>
                        <path
                            d="M0 113L22.8 113.8C45.7 114.7 91.3 116.3 137 128C182.7 139.7 228.3 161.3 274 166.8C319.7 172.3 365.3 161.7 411.2 156.3C457 151 503 151 548.8 156C594.7 161 640.3 171 686 165C731.7 159 777.3 137 823 136.2C868.7 135.3 914.3 155.7 937.2 165.8L960 176L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fde461" id="blob3"></path>
                        <path
                            d="M0 95L22.8 99.7C45.7 104.3 91.3 113.7 137 112C182.7 110.3 228.3 97.7 274 97C319.7 96.3 365.3 107.7 411.2 114.5C457 121.3 503 123.7 548.8 123.8C594.7 124 640.3 122 686 123.3C731.7 124.7 777.3 129.3 823 126.2C868.7 123 914.3 112 937.2 106.5L960 101L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffec98" id="blob5"></path>
                        <path
                            d="M0 70L22.8 69.5C45.7 69 91.3 68 137 67.8C182.7 67.7 228.3 68.3 274 65.5C319.7 62.7 365.3 56.3 411.2 58C457 59.7 503 69.3 548.8 69.8C594.7 70.3 640.3 61.7 686 63.7C731.7 65.7 777.3 78.3 823 82.2C868.7 86 914.3 81 937.2 78.5L960 76L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fff5cc" id="blob7"></path>
                        <path
                            d="M0 47L22.8 44C45.7 41 91.3 35 137 32.3C182.7 29.7 228.3 30.3 274 31.8C319.7 33.3 365.3 35.7 411.2 37.8C457 40 503 42 548.8 41.7C594.7 41.3 640.3 38.7 686 35.2C731.7 31.7 777.3 27.3 823 30.2C868.7 33 914.3 43 937.2 48L960 53L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffffff" id="blob9"></path>
                    </g>
                    <g style="visibility: hidden">
                        <path
                            d="M0 79L22.8 78.5C45.7 78 91.3 77 137 96.8C182.7 116.7 228.3 157.3 274 174.3C319.7 191.3 365.3 184.7 411.2 172.5C457 160.3 503 142.7 548.8 133.5C594.7 124.3 640.3 123.7 686 115.7C731.7 107.7 777.3 92.3 823 85C868.7 77.7 914.3 78.3 937.2 78.7L960 79L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fde461" id="blob4"></path>
                        <path
                            d="M0 26L22.8 41.5C45.7 57 91.3 88 137 91.7C182.7 95.3 228.3 71.7 274 72.5C319.7 73.3 365.3 98.7 411.2 102.7C457 106.7 503 89.3 548.8 83.3C594.7 77.3 640.3 82.7 686 77.5C731.7 72.3 777.3 56.7 823 56.7C868.7 56.7 914.3 72.3 937.2 80.2L960 88L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffec98" id="blob6"></path>
                        <path
                            d="M0 123L22.8 111.3C45.7 99.7 91.3 76.3 137 71C182.7 65.7 228.3 78.3 274 73.3C319.7 68.3 365.3 45.7 411.2 38.3C457 31 503 39 548.8 45.5C594.7 52 640.3 57 686 64.5C731.7 72 777.3 82 823 81.7C868.7 81.3 914.3 70.7 937.2 65.3L960 60L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#fff5cc" id="blob8"></path>
                        <path
                            d="M0 34L22.8 41.7C45.7 49.3 91.3 64.7 137 64.8C182.7 65 228.3 50 274 47.5C319.7 45 365.3 55 411.2 59.3C457 63.7 503 62.3 548.8 59.7C594.7 57 640.3 53 686 47.3C731.7 41.7 777.3 34.3 823 38.8C868.7 43.3 914.3 59.7 937.2 67.8L960 76L960 0L937.2 0C914.3 0 868.7 0 823 0C777.3 0 731.7 0 686 0C640.3 0 594.7 0 548.8 0C503 0 457 0 411.2 0C365.3 0 319.7 0 274 0C228.3 0 182.7 0 137 0C91.3 0 45.7 0 22.8 0L0 0Z"
                            fill="#ffffff" id="blob10"></path>
                    </g>
                </svg>
                <div class="flex justify-center items-center">
                    <div class="stats stats-vertical lg:stats-horizontal shadow w-3/4">

                        <div class="stat">
                            <div class="stat-title">مشتریان ما</div>
                            <div class="stat-value">31K</div>
                            <div class="stat-desc">Jan 1st - Feb 1st</div>
                        </div>

                        <div class="stat">
                            <div class="stat-title">فروش ماهانه</div>
                            <div class="stat-value">4,200 $</div>
                            <div class="stat-desc">↗︎ 400 (22%)</div>
                        </div>

                        <div class="stat">
                            <div class="stat-title">سفارشات ما</div>
                            <div class="stat-value">1,200</div>
                            <div class="stat-desc">↘︎ 90 (14%)</div>
                        </div>

                    </div>
                </div>
        </section>
        <svg id="visual" viewBox="0 0 900 200" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g>
                <path
                    d="M0 188L21.5 195.5C43 203 86 218 128.8 227.7C171.7 237.3 214.3 241.7 257.2 242.8C300 244 343 242 385.8 234C428.7 226 471.3 212 514.2 198.5C557 185 600 172 642.8 167.3C685.7 162.7 728.3 166.3 771.2 174.3C814 182.3 857 194.7 878.5 200.8L900 207L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffffff" id="lob1"></path>
                <path
                    d="M0 126L21.5 139.2C43 152.3 86 178.7 128.8 187.2C171.7 195.7 214.3 186.3 257.2 186C300 185.7 343 194.3 385.8 189.5C428.7 184.7 471.3 166.3 514.2 158.7C557 151 600 154 642.8 152.3C685.7 150.7 728.3 144.3 771.2 138.2C814 132 857 126 878.5 123L900 120L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fff5cc" id="lob3"></path>
                <path
                    d="M0 88L21.5 97.3C43 106.7 86 125.3 128.8 129.5C171.7 133.7 214.3 123.3 257.2 122.3C300 121.3 343 129.7 385.8 127C428.7 124.3 471.3 110.7 514.2 113C557 115.3 600 133.7 642.8 139C685.7 144.3 728.3 136.7 771.2 128.5C814 120.3 857 111.7 878.5 107.3L900 103L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffec98" id="lob5"></path>
                <path
                    d="M0 82L21.5 79.3C43 76.7 86 71.3 128.8 67C171.7 62.7 214.3 59.3 257.2 58.8C300 58.3 343 60.7 385.8 69.5C428.7 78.3 471.3 93.7 514.2 94.5C557 95.3 600 81.7 642.8 77.5C685.7 73.3 728.3 78.7 771.2 79.2C814 79.7 857 75.3 878.5 73.2L900 71L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fde461" id="lob7"></path>
                <path
                    d="M0 65L21.5 59.5C43 54 86 43 128.8 42.5C171.7 42 214.3 52 257.2 50.8C300 49.7 343 37.3 385.8 32.2C428.7 27 471.3 29 514.2 29.5C557 30 600 29 642.8 32.2C685.7 35.3 728.3 42.7 771.2 42.7C814 42.7 857 35.3 878.5 31.7L900 28L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#f9db03" id="lob9"></path>
            </g>
            <g style="visibility: hidden">
                <path
                    d="M0 217L21.5 207.3C43 197.7 86 178.3 128.8 171C171.7 163.7 214.3 168.3 257.2 177.3C300 186.3 343 199.7 385.8 208.3C428.7 217 471.3 221 514.2 219.8C557 218.7 600 212.3 642.8 206.8C685.7 201.3 728.3 196.7 771.2 187.8C814 179 857 166 878.5 159.5L900 153L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffffff" id="lob2"></path>
                <path
                    d="M0 155L21.5 154.7C43 154.3 86 153.7 128.8 158C171.7 162.3 214.3 171.7 257.2 169.8C300 168 343 155 385.8 147.7C428.7 140.3 471.3 138.7 514.2 134.8C557 131 600 125 642.8 122C685.7 119 728.3 119 771.2 124.2C814 129.3 857 139.7 878.5 144.8L900 150L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fff5cc" id="lob4"></path>
                <path
                    d="M0 144L21.5 140.2C43 136.3 86 128.7 128.8 119.3C171.7 110 214.3 99 257.2 105.5C300 112 343 136 385.8 137.5C428.7 139 471.3 118 514.2 116.8C557 115.7 600 134.3 642.8 137.2C685.7 140 728.3 127 771.2 124.7C814 122.3 857 130.7 878.5 134.8L900 139L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#ffec98" id="lob6"></path>
                <path
                    d="M0 67L21.5 74.2C43 81.3 86 95.7 128.8 95C171.7 94.3 214.3 78.7 257.2 76.3C300 74 343 85 385.8 84.7C428.7 84.3 471.3 72.7 514.2 66.3C557 60 600 59 642.8 59.2C685.7 59.3 728.3 60.7 771.2 66.2C814 71.7 857 81.3 878.5 86.2L900 91L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#fde461" id="lob8"></path>
                <path
                    d="M0 46L21.5 42.7C43 39.3 86 32.7 128.8 35.3C171.7 38 214.3 50 257.2 53.2C300 56.3 343 50.7 385.8 51.5C428.7 52.3 471.3 59.7 514.2 57.5C557 55.3 600 43.7 642.8 38.5C685.7 33.3 728.3 34.7 771.2 39.5C814 44.3 857 52.7 878.5 56.8L900 61L900 0L878.5 0C857 0 814 0 771.2 0C728.3 0 685.7 0 642.8 0C600 0 557 0 514.2 0C471.3 0 428.7 0 385.8 0C343 0 300 0 257.2 0C214.3 0 171.7 0 128.8 0C86 0 43 0 21.5 0L0 0Z"
                    fill="#f9db03" id="lob10"></path>
            </g>
        </svg>
        <footer class="footer overflow-hidden footer-center p-10 bg-primary text-primary-content mt-3">
            <aside>
                <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd" class="inline-block shoplist fill-current">
                    <path
                        d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
                    </path>
                </svg>
                <p class="font-bold">
                    ساخته شده توسط تیم جکسروید <br>
                </p>
                <p>Copyright © 2024 -است wpcpersian تمامی حقوق مربوط سایت </p>
            </aside>

        </footer>
    </main>


</body>

</html>