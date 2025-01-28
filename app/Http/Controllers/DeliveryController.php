<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DeliveryController extends Controller
{
    public function index()
    {
//        subMinutes, subHours
        $i = 1;
        $time = Carbon::now()->subMinutes(10);
        $lastOrders = Order::where('created_at', '>=', $time)->orderBy('created_at', 'desc')->get();
        return view('client.delivery.show')
            ->with([
                'lastOrders' => $lastOrders,
                'i' =>$i
            ]);
    }
}
