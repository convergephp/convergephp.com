<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPrice;
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

    public function show(Product $product, Request $request)
    {

        $prices = $product->prices()->get()->map(function (ProductPrice $price) use ($request) {
            $price->append([
                'checkout' => $request->user()->checkout($price->paddle_price_id)
                    ->returnTo(route('dashboard'))
            ]);
        });

        dd($prices);

        return view('products.show', [
            'product' => $product,
        ]);
    }
}
