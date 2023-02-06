<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Stripe;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\DB;


class PayController extends Controller
{

    public function stripe()
    {
        $payments= DB::table('payments')->get();
        return view('stripe', ['payments' => $payments]);
  }
    // public function stripe()
    // {
        // return view('stripe');
    // }
    public function payStripe(Request $request)
    {
        $this->validate($request, [
            'card_no' => 'required',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
            'cvv' => 'required',
        ]);
 
        $stripe = Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $response = \Stripe\Token::create(array(
                "card" => array(
                    "number"    => $request->input('card_no'),
                    "exp_month" => $request->input('expiry_month'),
                    "exp_year"  => $request->input('expiry_year'),
                    "cvc"       => $request->input('cvv')
                )));
            if (!isset($response['id'])) {
                return redirect()->route('addmoney.paymentstripe');
            }
            $charge = \Stripe\Charge::create([
                'card' => $response['id'],
                'currency' => 'USD',
                'amount' =>  100 * 100,
                'description' => 'wallet',
            ]);
 
            if($charge['status'] == 'succeeded') {
                return redirect('thankyou');
 
            } else {
                return redirect('stripe')->with('error', 'something went to wrong.');
            }
 
        }
        catch (Exception $e) {
            return $e->getMessage();
        }
 
    }


    public function thankYou()
    {
      return view('thankyou');
    }
 

}