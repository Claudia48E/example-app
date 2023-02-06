<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     public function products()
    {
        $product = DB::table('products')->get();
        return view('products', ['products'=>$product]);
   }
}
