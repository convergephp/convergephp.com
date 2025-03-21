<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __invoke()
    {
        $producs = Product::all();

        return view('products.index', [
            'products' => $producs,
        ]);
    }
}
