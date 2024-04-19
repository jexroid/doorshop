<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script type="module" crossorigin src="{{ asset('js/about.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('css/about.css') }}">
</head>

<body class="bg-white">
    <section>
        <div class="hero " style="background-image: url(/img/img4.jpg);">
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
                <p>tabindex="0" attribute is necessary to make the div focusable</p>
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
                <p>tabindex="0" attribute is necessary to make the div focusable</p>
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
                <p>tabindex="0" attribute is necessary to make the div focusable</p>
            </div>
        </div>

    </section>
    <footer class="footer footer-center p-10 bg-primary text-primary-content mt-3">
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
</body>
</html>
