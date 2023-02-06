<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function welcome(){

        return view('welcome');
}


    
public function products(){
        $product = DB::table('products')->get();
        return view('products', ['products'=>$product]);
}

 public function booking(){
return view('booking');
}

   public function delivery(){
   return view('delivery');
}

    public function cookAtHome(){
    return view ('cook at home');
    }

   public function restaurant(){
   return view('restaurant');
}

    public function login(){
        return view('login');
    }

}
