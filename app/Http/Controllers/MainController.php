<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ShoppingCart;

class MainController extends Controller
{
    //
    public function home()
    {
        // $shopping_cart = ShoppingCart::return ShoppingCart::findBySession(null);

        return view('main.home')->with(compact('shoppingCart'));
    }
}
