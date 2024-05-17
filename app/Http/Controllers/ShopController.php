<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index($lang)
    {
        // $product = Product::find(1)->getRawOriginal();

        if (in_array($lang, ['en', 'ar', 'tr', 'ru', 'fa'])) {
            app()->setLocale($lang);
            return view('store');
        }
        return abort(404);
    }

}
