@extends('layout')

@section('title', "@lang('messages.menu_about')")


@section('assets')
<script type="module" crossorigin src="{{ asset('js/about.js') }}"></script>
<link rel="stylesheet" crossorigin href="{{ asset('css/about.css') }}">
@endsection()

@section('content')
<main class="pt-7">
    <section>
        <div class="hero" style="background-image: url(/img/img4.jpg);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">wpersianc.com</h1>
                    <!-- <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                            exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                        <button class="hover-btn btn btn-primary text-black">شروع کنید</button> -->
                </div>
            </div>
        </div>
    </section>
    <section>

    </section>
    <section>
        <div
            class="container flex justify-center  relative px-4  flex-wrap gap-12 mt-10 lg:left-20 sm:flex-wrap md:flex-wrap">
            <div class="stack">
                <div class="card shadow-md bg-gradient-to-br from-[#FF9153] to-[#FFD143] text-primary-content">
                    <div class="card-body ">
                        <img src="/img/photo_2024-04-02_23-42-12.jpg" class="w-full h-full object-cover blur-sm "
                            alt="Notification Image">
                        <h2 class="card-title absolute top-2 left-2 text-white ">20 سال سابقه کار</h2>
                    </div>
                </div>

                <div class="card shadow bg-primary text-primary-content">
                    <div class="card-body">

                    </div>
                </div>
                <div class="card shadow-sm bg-primary text-primary-content">
                    <div class="card-body">
                    </div>
                </div>
            </div>

            <div class="stack">
                <div class="card shadow-md bg-gradient-to-br from-[#FF9153] to-[#FFD143] text-primary-content">
                    <div class="card-body">
                        <img src="/img/photo_2024-04-02_23-42-12.jpg" class="w-full h-full object-cover blur-sm"
                            alt="Notification Image">
                        <h2 class="card-title absolute top-2 left-2 text-white">Notification 1</h2>
                    </div>
                </div>

                <div class="card shadow bg-primary text-primary-content">
                    <div class="card-body">

                    </div>
                </div>

                <div class="card shadow-sm bg-primary text-primary-content">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="stack">
                <div class="card shadow-md bg-gradient-to-br from-[#FF9153] to-[#FFD143] text-primary-content">
                    <div class="card-body">
                        <img src="/img/images (1).jpg" class="w-full h-full object-cover blur-sm"
                            alt="Notification Image">
                        <h2 class="card-title absolute top-2 left-2 text-white">Notification 1</h2>
                    </div>
                </div>

                <div class="card shadow bg-primary text-primary-content">
                    <div class="card-body">

                    </div>
                </div>

                <div class="card shadow-sm bg-primary text-primary-content">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <script>
                const cards = document.querySelectorAll(".card");

                cards.forEach(card => {
                    card.addEventListener("mouseenter", () => {
                        const img = card.querySelector("img");
                        img.classList.remove("blur-sm");
                    });

                    card.addEventListener("mouseleave", () => {
                        const img = card.querySelector("img");
                        img.classList.add("blur-sm");
                    });
                });
            </script>
    </section>

    <section class="flex justify-center mt-12">
        <h2 class="text-lg text-wrap" id="product-title"> چرا ما؟</h2>
        <script>
            const titleElement = document.getElementById("product-title");

            // انیمیشن اسکرول به بالا
            window.addEventListener("scroll", () => {
                if (window.scrollY > 100) {
                    titleElement.classList.add("animated");
                } else {
                    titleElement.classList.remove("animated");
                }
            });

            // انیمیشن اسکرول به پایین
            window.addEventListener("scroll", () => {
                if (window.scrollY > 500) {
                    titleElement.classList.add("animated-down");
                } else {
                    titleElement.classList.remove("animated-down");
                }
            });

            // انیمیشن کلیک
            titleElement.addEventListener("click", () => {
                titleElement.classList.add("animated-click");
                setTimeout(() => {
                    titleElement.classList.remove("animated-click");
                }, 300);
            });
        </script>
    </section>

    <section class="mt-10 px-28">
        <div tabindex="0"
            class="collapse bg-gradient-to-tr from-[#ff8741] to-[#ffc002]  text-primary-content focus:bg-orange-500 focus:text-secondary-content">
            <div class="collapse-title font-bold">
                شرکت ما کجاست؟
            </div>
            <div class="collapse-content">
                <p>ایران تهران خیابان قلعه مید بین آزادگان و مفتح</p>
            </div>
        </div>
    </section>
    <section class="mt-2 px-24">
        <div tabindex="0"
            class="collapse bg-gradient-to-tl from-[#FF9153] to-[#FFD143] text-primary-content focus:bg-secondary focus:text-secondary-content">
            <div class="collapse-title font-bold">
                چگونه سفارش دهیم؟
            </div>
            <div class="collapse-content">
                <p>شما با کلیک بر روی محصولات میتوانید سفارش خود را ثبت کنید</p>
            </div>
        </div>
    </section>
    <section class="mt-2 px-20">
        <div tabindex="0"
            class="collapse bg-gradient-to-br from-[#cf713a] to-[#f8d467] text-primary-content focus:bg-orange-300 focus:text-secondary-content">
            <div class="collapse-title  font-bold">
                رزومه و خدمات شرکت ما چیست؟
            </div>
            <div class="collapse-content">
                <p>با ورود به صفحه ی</p>
            </div>
        </div>

    </section>
</main>

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
@endsection()