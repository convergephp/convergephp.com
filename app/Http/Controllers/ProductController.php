<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // VOCLIC WAS HERE...

        Session::put(Constants::AFTER_LOGIN_REDIRECT_URL, url()->current());
        
        $licenses = $product->licenses->where('user_id', Auth::id());


        return view('products.show', [
            'product' => $product,
            'licenses' => $licenses
        ]);
    }
}
