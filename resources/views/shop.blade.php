@extends('layout')

@section('title', 'shop')

@section('assets')
<link rel="stylesheet" href="{{ @asset('css/shop.css') }}">
@endsection()

@section('content')
    <main>
        <section class="mt-20 px-6">
            <div
                class="flex flex-col w-3/4 h-full gap-5 p-2 mx-auto bg-white shadow-lg select-none sm:p-4  rounded-2xl sm:flex-row">
                <div class="bg-gray-200 h-72 sm:h-full sm:w-72 rounded-xl  ">
                    <!-- جایگزین کردن عکس با اسلایدر -->
                    <div class="h-full w-full rounded-xl ">
                        <div class="swiper mySwiper" style="width: 100%; height: 100%;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col flex-1 gap-5 sm:p-2">
                    <div class="flex flex-col flex-1 gap-3">
                        <div class="w-full bg-slate-950 text-yellow-50 animate-pulse h-14 rounded-2xl mt-10">
                            <h1 class="flex justify-center py-3">روکش درب پلاس</h1>
                        </div>
                        <div class="w-full h-12 bg-gray-200 text-right px-2  rounded-2xl mt-5">
                            <h3>توضیحات محصول</h3>
                        </div>
                        <div class="w-full h-8 bg-gray-200 text-right rounded-2xl px-2 mt-5">
                            <h4>امکان ارسال با </h4>
                        </div>
                        <div class="grid grid-cols-3 gap-4 mt-5">
                            <div class="h-8 bg-gray-200 rounded animate-pulse">
                            </div>
                            <div class="h-8 bg-gray-200 rounded animate-pulse">
                            </div>
                            <button
                                class="h-8 bg-gray-200 rounded hover-btn  hover:bg-gray-300 focus:outline-none focus:ring focus:ring-gray-400 focus:ring-opacity-50">
                                سفارش
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper JS -->
    
    
        </section>
    
        <section class="flex justify-center mt-12">
            <h2 class="text-lg text-wrap" id="product-title">محصولات دیگر ما</h2>
        </section>
    
        <section class="flex justify-center mt-5">
            <div class="swiper-container my-slider ">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" alt="Nature 1" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" alt="Nature 2" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" alt="Nature 3" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" alt="Nature 4" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" alt="Nature 5" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    
    
    
    
    
    
    
        <footer class="footer footer-center bottom-0   bg-primary text-primary-content mt-20">
    
            <aside>
                <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    fill-rule="evenodd" clip-rule="evenodd" class="inline-block fill-current">
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
        <script src="{{ @asset('js/shop.js') }}"></script>
    </main>
@endsection()
