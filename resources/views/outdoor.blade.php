@extends('layout')

@section('title', 'store')

@section('assets')
<link rel="stylesheet" href="{{ asset('css/outdoor.css') }}">
@endsection

@section('content')
<main>
    <div class="p-1 flex flex-wrap items-center justify-center">

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/1.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">
                <div class="flex justify-between">
                    <span
                        class=" bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/2.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/75.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/74.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/73.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>

        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/72.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/71.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>

        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/70.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/69.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>

        </div>

        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/64.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/63.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>

        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/62.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/61.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>

        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/60.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/59.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>

        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/58.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/65.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>

        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/56.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                    fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
            </svg>
            <div
                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-40" src="../img/55.png" alt="">
            </div>
            <div class="relative text-white px-6 pb-6 mt-6">

                <div class="flex justify-between">

                    <span
                        class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">@lang('messages.buy')</span>
                </div>
            </div>
        </div>
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
@endsection