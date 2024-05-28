<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    //
    public function handlePayment(Request $request) {
        $order = Order::where('order_id', $request->order_id)->first();

        if (!$order) {
            Log::info("invalid order id");
            return response()->json(['error' => 'Invalid order id']);
        }else if($order->status!='pending') {
            Log::info("order has been paid");
            return response()->json(['error' => 'Order has been paid']);
        }

        $order->status='paid';
        $order->save();
 
        Log::info("Payment success");
        return response()->json([
            'success' => 'Payment success'
        ]);
    }      
}
