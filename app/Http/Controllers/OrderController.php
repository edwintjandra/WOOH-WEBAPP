<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\WaterPackages;
use Midtrans\Snap;


class OrderController extends Controller
{
    //
    public function index(){
        return view('order.index');
    }

    public function store(Request $request){
        $request->validate([
            'water_package_id'=>'required'
        ]);

        if (Auth::check()) {
            $user = Auth::user();
            $waterPackage = WaterPackages::find($request->water_package_id);

            if(is_null($waterPackage)){
                //water package is null
                return redirect()->route('homepage')->with('error', 'Water package not found');
            }

           $order=Order::create([
                'order_id' => 'ORD'.'-'.strtoupper(substr(md5(mt_rand()), 0, 7)),
                'user_id'=>$user->id,
                'water_package_id'=>$waterPackage->id,
                'user_name'=>$user->name,
                //hard coded user phone
                'user_phone'=>'083895731890',
                'package_name'=>$waterPackage->name,
                //hard coded address
                'address'=>'JL Industri raya no.9-11, gunung sahari utara',
                'total_price'=>$waterPackage->price,
            ]);


            try {
                $params = [
                    'transaction_details' => [
                        'order_id' => $order->order_id,
                        'gross_amount' => $order->total_price,
                    ],
                    'customer_details' => [
                        'first_name' => $order->user_name,
                        'phone' => $order->user_phone,
                    ],
                ];

                // Get Snap Payment Page URL
                $paymentUrl = Snap::createTransaction($params)->redirect_url;
                
                // Redirect to Snap Payment Page
                return redirect($paymentUrl);
              }
              catch (Exception $e) {
                echo $e->getMessage();
              }

        } else {
            // The user is not logged in
            return redirect()->route('login')->with('error', 'You must be logged in to place an order.');
        }

    }
}
