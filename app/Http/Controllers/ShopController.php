<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function indoor($lang)
    {
        // $product = Product::find(1)->getRawOriginal();

        if (in_array($lang, ['en', 'ar', 'tr', 'ru', 'fa'])) {
            app()->setLocale($lang);
            return view('indoor');
        }
        return abort(404);
    }

    public function outdoor($lang)
    {
        // $product = Product::find(1)->getRawOriginal();

        if (in_array($lang, ['en', 'ar', 'tr', 'ru', 'fa'])) {
            app()->setLocale($lang);
            return view('outdoor');
        }
        return abort(404);
    }

}
