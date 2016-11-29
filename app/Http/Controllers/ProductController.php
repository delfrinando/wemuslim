<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {

        $products = Products::paginate(15);

        return view('product.index')->with('products', $products);

    }

    public function getdetail($product_id = NULL)
    {
        try {
            $product = Products::find($product_id);
            if ($product != NULL) {
                return view('product.productdetail')->with('product', $product);
            } else {
                $products = Products::paginate(15);
                return Redirect::route("product")->with('products', $products);
            }

        } catch (\Exception $e) {

            $products = Products::paginate(15);

            return Redirect::route("product")->with('products', $products);
        }


    }
}
