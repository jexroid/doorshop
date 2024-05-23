@extends('layout')

@section('title', "@lang('messages.menu_contact')")


@section('assets')
<link rel="stylesheet" href="{{ @asset('css/contact.css') }}" />
@endsection

@section('content')
<main class="pt-7">
    <section>
        <div class="hero " style="background-image: url(../img/img7.jpg);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">wpc.com</h1>
                    <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                        exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button class="hover-btn btn btn-primary text-black">شروع کنید</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div
            class="container flex justify-center  rounded-full relative px-10   flex-wrap gap-12 mt-10 lg:left-20 sm:flex-wrap md:flex-wrap">
            <div class="stack  ">
                <div class="card  shadow-md bg-gradient-to-br from-[#FF9153] to-[#FFD143] text-primary-content">
                    <div class="hero  " style="background-image: url(../img/1123.jpg); ">
                        <div class="hero-overlay bg-opacity-60"></div>
                        <div class="hero-content text-center text-neutral-content">
                            <div class="max-w-md">
                                <div class="flex  justify-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-20 h-20  text-yellow-500 ">
                                        <path
                                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                        <path
                                            d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                                    </svg>
                                    <h1 class="  text-4xl font-bold">ایمیل ما</h1>
                                </div>
                                <h2 class="mb-8 text-xl font-bold">
                                    wpcpersian@gmail.com
                                </h2>
                            </div>
                        </div>
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
                    <div class="hero " style="background-image: url(../img/1123.jpg); ">
                        <div class="hero-overlay bg-opacity-60"></div>
                        <div class="hero-content text-center text-neutral-content">
                            <div class="max-w-md">
                                <i class="fas fa-phone-alt text-yellow-500 text-5xl mr-3"></i>
                                <h1 class="mb-5 text-4xl font-bold">شماره تماس ما</h1>
                                <a href="tel:09126331561" class="mb-5 text-xl font-bold">
                                    0912 633 1561
                                </a><br>
                                <a href="tel:02156862370" class="mb-5 text-xl font-bold">
                                    02156862370
                                </a>
                            </div>
                        </div>
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
                    <div class="hero " style="background-image: url(../img/1123.jpg); ">
                        <div class="hero-overlay bg-opacity-60"></div>
                        <div class="hero-content text-center text-neutral-content">
                            <div class="max-w-md">
                                <i class="fas fa-home text-yellow-500 text-5xl mr-3"></i>
                                <h1 class="mb-5 text-4xl font-bold">ادرس ما</h1>
                                <h2 class="mb-5 text-xl font-bold">
                                    ایران تهران خیابان قلعه مید بین آزادگان و مفتح
                                </h2>
                            </div>
                        </div>
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

    </section>
    <section>
        <div class="flex justify-center items-center mt-10 "> <!-- فلکس‌باکس برای مرکز قرار دادن فرم -->
            <div class="card shrink-0 w-full  bg-white"> <!-- افزایش عرض کارت -->
                <form class="card-body">
                    <div class="flex justify-center gap-3">
                        <div class="form-control flex-grow">
                            <input type="text" placeholder=" نام ونام خانوادگی"
                                class="input input-bordered input-info w-full bg-white" />
                        </div>
                        <div class="form-control flex-grow">
                            <input type="text" placeholder="شماره تماس"
                                class="input input-bordered input-info w-full bg-white" />
                        </div>
                        <div class="form-control flex-grow">
                            <input type="text" placeholder="موضوع "
                                class="input input-bordered input-info w-full bg-white" />
                        </div>
                    </div>
                    <div class="flex justify-center items-center ">
                        <textarea class="textarea textarea-accent w-full bg-white" placeholder="توضیحات"></textarea>
                    </div>
                    <div class="flex justify-center mt-6">
                        <button class=" w-3/6 hover-btn btn btn-primary text-black">ارسال</button>
                    </div>
                </form>
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