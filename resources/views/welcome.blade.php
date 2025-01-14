@php
    $l = app()->getLocale();
    $direction;
    if ($l == 'fa' || $l == 'ar') {
        $direction = 'dir="rtl"';
    } else {
        $direction = '';
    }
@endphp

@extends('layout')

@section('title', 'wpercian')

@section('assets')
<script type="module" crossorigin src="{{ asset('js/index.js') }}"></script>
<!-- <link rel="stylesheet" crossorigin href="{{ asset('css/index.css') }}"> -->
@endsection

@section('content')
<main class="pt-14">
    <div id="particles-js"></div>
    <section class="">
        <div class="w-28 h-28 bg-[#f9dc03c7] blur-3xl absolute right-96 top-28 hidden lg:block rounded-badge">
        </div>
        <div class="w-44 h-28 bg-[#f9d403ce] blur-3xl absolute left-12 bottom-48 hidden lg:block rounded-badge">
        </div>
        <div class="flex justify-center items-centers mx-10 flex-col lg:flex-row">
            <div class="swiper w-72 h-72 rounded-md image border border-black">
                <div class="swiper-wrapper">
                    <img class="swiper-slide" src="/img/photo_2024-04-22_21-31-19.jpg" />
                    <img class="swiper-slide" src="/img/4.png" />
                    <img class="swiper-slide" src="/img/3.png" />
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="flex justify-center items-center">
                <div class="p-6 min-h-max container">
                    <div class="flex max-w-7xl flex-col gap-2 items-center justify-center">
                        <div class="text-center p-2">
                            <h1 class="text-4xl font-bold mb-3 welcome" @php echo $direction @endphp>
                                @lang('messages.welcome')
                            </h1>
                            <p class="welcome mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl"
                                @php echo $direction @endphp>
                                @lang('sections.profile')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="shop" class="bg-[#F9DB03] pb-12">
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
                    <a href="/@lang('messages.lang')/store"
                        class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                        <div class="card w-56 bg-base-100 shadow-xl">
                            <figure>
                                <img src="{{ asset('img/1.png') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    wpercian
                                    <div class="badge badge-secondary">@lang('sections.new')</div>
                                </h2>

                            </div>
                        </div>
                    </a>
                    <a href="/@lang('messages.lang')/store"
                        class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                        <div class="card w-56 bg-base-100 shadow-xl">
                            <figure>
                                <img src="{{ asset('img/2.png') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    wpercian
                                    <div class="badge badge-secondary">@lang('sections.new')</div>
                                </h2>

                            </div>
                        </div>
                    </a>
                    <a href="/@lang('messages.lang')/store"
                        class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                        <div class="card w-56 bg-base-100 shadow-xl">
                            <figure>
                                <img src="{{ asset('img/3.png') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    wpercian
                                    <div class="badge badge-secondary">@lang('sections.new')</div>
                                </h2>

                            </div>
                        </div>
                    </a>
                    <a href="/@lang('messages.lang')/store"
                        class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                        <div class="card w-56 bg-base-100 shadow-xl">
                            <figure>
                                <img src="{{ asset('img/4.png') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    wpercian
                                    <div class="badge badge-secondary">@lang('sections.new')</div>
                                </h2>

                            </div>
                        </div>
                    </a>
                    <a href="/@lang('messages.lang')/store"
                        class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                        <div class="card w-56 bg-base-100 shadow-xl">
                            <figure>
                                <img src="{{ asset('img/5.png') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    wpercian
                                    <div class="badge badge-secondary">@lang('sections.new')</div>
                                </h2>

                            </div>
                        </div>
                    </a>
                    <a href="/@lang('messages.lang')/store"
                        class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                        <div class="card w-56 bg-base-100 shadow-xl">
                            <figure>
                                <img src="{{ asset('img/6.png') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    wpercian
                                    <div class="badge badge-secondary">@lang('sections.new')</div>
                                </h2>

                            </div>
                        </div>
                    </a>
                    <a href="/@lang('messages.lang')/store"
                        class="inline-block shoplist relative overflow-hidden grow h-full shrink-0 ml-1">
                        <div class="card w-56 bg-base-100 shadow-xl">
                            <figure>
                                <img src="{{ asset('img/7.png') }}" alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">
                                    wpercian
                                    <div class="badge badge-secondary">@lang('sections.new')</div>
                                </h2>
                            </div>
                        </div>
                    </a>
                </ul>
            </div>
    </section>
    <svg id="visual" viewBox="0 0 900 200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        version="1.1">
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
                    @php echo $direction @endphp>
                    @lang('sections.products')</h1><br>
                <p class="wsau text-right" @php echo $direction @endphp>
                    @lang('sections.product')
                </p>
                <div class="divider">
                    <h2 class="font-bold text-lg" @php echo $direction @endphp>@lang('sections.our_product')</h2>
                </div>
                <a href="/@lang('messages.lang')/indoor"
                    class="my-16 flex flex-col justify-center items-center lg:flex-row gap-10"
                    data-aos="fade-down-right">
                    <div class="w-48 atropos my-atropos shadow-lg">
                        <div class="atropos-scale">
                            <div class="atropos-rotate animate-glow">
                                <div data-atropos-offset="-10"
                                    class="absolute -bottom-3 -left-7 w-20 h-20 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2 z-30">
                                </div>
                                <div data-atropos-offset="-5"
                                    class="absolute -top-6 -right-4 w-24 h-24 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2">
                                </div>
                                <div class="atropos-inner">
                                    <div class="relative w-48 h-48 flex justify-center items-center bg-white shadow-black shadow-lg rounded-lg border-black border-2"
                                        data-atropos-offset="0">
                                        <span class="" data-atropos-offset="5"><span
                                                class="btn rounded-lg font-extrabold bg-gradient-to-br from-orange-500 to-yellow-400">@lang('messages.buy')</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center lg:text-end self-center w-full">
                        <h2 class="text-4xl font-bold">wpercianc (indoor)</h2><br>
                        <p>@lang('sections.product_indoor')
                        </p>
                    </div>
                </a>
                <a href="/@lang('messages.lang')/outdoor"
                    class="my-36 flex flex-col-reverse justify-center items-center lg:flex-row gap-10"
                    data-aos="fade-down-left">
                    <div class="text-center lg:text-start self-center w-full">
                        <h2 class="text-4xl font-bold">wpercianc (outdoor)</h2><br>
                        <p>@lang('sections.product_outdoor')
                        </p>
                    </div>
                    <div class="w-48 atropos my-atropos-2 shadow-lg">
                        <div class="atropos-scale">
                            <div class="atropos-rotate animate-glow">
                                <div data-atropos-offset="-10"
                                    class="absolute -bottom-3 -left-7 w-20 h-20 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2 z-30">
                                </div>
                                <div data-atropos-offset="-5"
                                    class="absolute -top-6 -right-4 w-24 h-24 rounded-full bg-gradient-to-br from-orange-500 to-yellow-400 border-black border-2">
                                </div>
                                <div class="atropos-inner">
                                    <div class="relative w-48 h-48 flex justify-center items-center bg-white shadow-black shadow-lg rounded-lg border-black border-2"
                                        data-atropos-offset="0">
                                        <span class="" data-atropos-offset="5"><span
                                                class="btn rounded-lg font-extrabold bg-gradient-to-br from-orange-500 to-yellow-400"
                                                href="/@lang('messages.lang')/outdoor">@lang('messages.buy')</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
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
                <div class="stats stats-vertical lg:stats-horizontal w-3/4">
                    <div class="stat">
                        <div class="stat-title">@lang('sections.customers')</div>
                        <div class="stat-value">31K</div>
                        <div class="stat-desc">Jan 1st - Feb 1st</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">@lang('sections.sell')</div>
                        <div class="stat-value">4,200 $</div>
                        <div class="stat-desc">↗︎ 400 (22%)</div>
                    </div>
                    <div class="stat">
                        <div class="stat-title">@lang('sections.order')</div>
                        <div class="stat-value">1,200</div>
                        <div class="stat-desc">↘︎ 90 (14%)</div>
                    </div>
                </div>
            </div>
    </section>
</main>

<svg id="visual" viewBox="0 0 900 200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    version="1.1">
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
<footer class="bg-white overflow-y-hidden rounded-t-2xl text-black p-4 max-w-full">
    <div class="footer footer-center">
        <div class="grid grid-flow-col gap-6 mt-8 px-2">
            <a href="/@lang('messages.lang')/about_us"
                class="link link-hover text-black hover:text-amber-300 text-lg font-bold">@lang('messages.menu_contact')</a>
            <a href="/@lang('messages.lang')/contact_us"
                class="link link-hover text-black hover:text-amber-300 text-lg font-bold">@lang('messages.menu_about')</a>
        </div>
        <div>
            <div class="flex justify-center space-x-8">
                <a href="https://wa.me/YOURNUMBER"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a href="tel:YOURNUMBER"
                    class=" transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fas fa-phone-alt fa-2x"></i>
                </a>
                <a href="https://instagram.com/YOURUSERNAME"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://github.com/YOURUSERNAME"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-github fa-2x"></i>
                </a>
                <a href="https://t.me/YOURUSERNAME"
                    class="transition-all duration-100 ease-in-out text-black hover:-translate-y-4">
                    <i class="fab fa-telegram-plane fa-2x"></i>
                </a>
            </div>
            <div class="flex justify-start items-center">
                <aside>
                    <p class=" hover:text-amber-200 mr-4 mt-8">
                        <!-- TODO: 2024 should be dynamic using php -->
                        @lang('messages.rights')
                    </p>
                </aside>
            </div>
        </div>
</footer>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", { "particles": { "number": { "value": 133, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#ff7800" }, "shape": { "type": "circle", "stroke": { "width": 0, "color": "#000000" }, "polygon": { "nb_sides": 6 }, "image": { "src": "img/github.svg", "width": 100, "height": 100 } }, "opacity": { "value": 0.5, "random": false, "anim": { "enable": false, "speed": 1, "opacity_min": 0.1, "sync": false } }, "size": { "value": 4.008530152163807, "random": true, "anim": { "enable": false, "speed": 40, "size_min": 0.1, "sync": false } }, "line_linked": { "enable": false, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 }, "move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false, "attract": { "enable": false, "rotateX": 600, "rotateY": 1200 } } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "bubble" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "grab": { "distance": 400, "line_linked": { "opacity": 1 } }, "bubble": { "distance": 121.81158184520176, "size": 8.120772123013452, "duration": 7.7959412380929125, "opacity": 0.9014057056544931, "speed": 3 }, "repulse": { "distance": 200, "duration": 0.4 }, "push": { "particles_nb": 4 }, "remove": { "particles_nb": 2 } } }, "retina_detect": true });
</script>

@endsection