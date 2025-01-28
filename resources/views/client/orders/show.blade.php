@extends('client.layouts.layout')

@section('show')
    @if (session('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    @endif
    <div class="container-lg py-1">

        <div class="row bg-dark-subtle border border-1 align-items-center my-1" >
            <div class="col-12 col-lg-1">
                No
            </div>
            <div class="col-12 col-lg-1">
                Sargalan ýeri
            </div>
            <div class="col-12 col-lg-2">
                Alyjy
            </div>
            <div class="col-12 col-lg-2">
                Alyjynyň nomeri
            </div>
            <div class="col-12 col-lg-3">
                Harydyň ady
            </div>
            <div class="col-12 col-lg-1">
                Bahasy
            </div>
            <div class="col-12 col-lg-2">
                Sargalan wagty
            </div>
        </div>
    @foreach($orders as $order)


            <div class="row bg-dark-subtle border border-1 align-items-center my-1" >
                <div class="col-12 col-lg-1" style="@if($order->delivered_or ==1) background-color  : #20c997 @else background-color : #bb2d3b @endif ">
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
                        @if($order->delivered_or ==1)
                            {{ $sum = $sum + $order->price }}
                        @endif
                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    {{ $order->created_at->format('H:i d-m-Y') }}
                </div>
            </div>



    @endforeach
    </div>
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
