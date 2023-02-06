<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Models\Pizzas;
use App\Models\Product;

use Illuminate\Support\Facades\DB;
class CheckoutController extends Controller
{
    public function getcheckout()
    {
        return view('checkout');
    }
}
