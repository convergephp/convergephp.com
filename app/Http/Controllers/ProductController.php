<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function __invoke()
    {
        $producs = Product::all();

        return view('products.index', [
            'products' => $producs,
        ]);
    }

    public function show(Product $product)
    {

        Session::put(Constants::AFTER_LOGIN_REDIRECT_URL, url()->current());

        return view('products.show', [
            'product' => $product,
        ]);
    }
}
