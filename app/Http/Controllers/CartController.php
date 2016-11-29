<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        return view('cart.index', compact('carts', 'total'));
    }

    public function addcart()
    {
//        var_dump($_REQUEST);
        $id = $_POST['id'];
        $name = $_POST['name'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];

        Cart::add($id, $name, $qty, $price);

        return Redirect::route("cart");

//    }
    }

    public function updatecart()
    {
        var_dump($_REQUEST);
        exit;
    }

    public function deletecart($rowId)
    {
        Cart::remove($rowId);

        return Redirect::route("cart");
    }
}
