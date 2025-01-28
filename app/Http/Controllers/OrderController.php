<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $fakeNum = fake()->numberBetween(100000, 999999);
        return view('client.afterOrder.qrGenerate')
            ->with([
                'fakeNum' => $fakeNum,
            ]);
    }
    public function store(Request $request)
    {

        $input = $request->all();
        $product = Order::create($input);
        return redirect()->route('successOrder')->with('flash_message', 'Sargyt edildi');

    }
    public function show(){
        $i = 1;
        $sum = 0;
        $orders = Order::orderBy('id', 'desc')->get();;
        return view('client.orders.show')
            ->with([
                'orders' => $orders,
                'i' =>$i,
                'sum' => $sum
            ]);
    }

    public function update($id)
    {
        $order = Order::findOrFail($id);
        $order->delivered_or = true;
        $order->save();
        return redirect()->route('ordersList')->with('flash_message', 'Söwda bolsun!');
    }
}
