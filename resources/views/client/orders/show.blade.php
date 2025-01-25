@extends('client.layouts.layout')

@section('show')
    @foreach($orders as $order)
        <div class="container-lg py-1">

            <div class="row bg-dark-subtle border border-1 align-items-center" >
                <div class="col-12 col-lg-1">
                    {{ $i++ }}
                </div>
                <div class="col-12 col-lg-1">
                    {{ $order->class_name }}
                </div>
                <div class="col-12 col-lg-2">
                    {{ $order->customer_name }}
                </div>
                <div class="col-12 col-lg-2">
                    {{ $order->phone_number }}
                </div>
                <div class="col-12 col-lg-3">
                    {{ $order->product_name }}
                </div>
                <div class="col-12 col-lg-1">
                    {{ $order->price }}
                    <div class="d-none">
                        {{ $sum = $sum + $order->price }}
                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    {{ $order->created_at->format('H:i d-m-Y') }}
                </div>
            </div>


        </div>
    @endforeach
        <div class="container-lg">
            <div class="d-flex justify-content-end text-success">
                <span class="bg-success text-warning px-3">
                    <div>
                        Jemi girdeýji: {{ $sum }} m
                    </div>
                </span>
            </div>

        </div>


@endsection
