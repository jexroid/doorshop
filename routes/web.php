<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/en');
});


Route::get('/{lang}', function (string $lang) {
    if (in_array($lang, ['en', 'ar', 'tr', 'ru', 'fa'])) {
        app()->setLocale($lang);
        return view('welcome');
    }
    return abort(404);
});


Route::get('/{lang}/about_us', function (string $lang) {
    if (in_array($lang, ['en', 'ar', 'tr', 'ru', 'fa'])) {
        app()->setLocale($lang);
        return view('about');
    }
    return abort(404);

});

Route::get('/{lang}/contact_us', function (string $lang) {
    if (in_array($lang, ['en', 'ar', 'tr', 'ru', 'fa'])) {
        app()->setLocale($lang);
        return view('contact');
    }
    return abort(404);
});

// Route::get('/{lang}/services', function (string $lang) {
//     if (in_array($lang, ['en', 'ar', 'tr', 'ru', 'fa'])) {
//         app()->setLocale($lang);
//         return view('shop');
//     }
//     return abort(404);
// });

// how get parameter and pass it to controller


Route::get('/{lang}/store', [ShopController::class, 'index']);