@extends('client.layouts.layout')

@section('show')
        <div class="container-lg py-1">

            @if($lastOrders == "[]")
                <div class="mt-3 fw-bold text-dark fs-6 text-center">Şu wagtlykça zakaz ýok</div>
            @else

                <div class="row bg-dark-subtle border border-1 align-items-center" >

                    <div class="col-12 col-lg-1">
                        No
                    </div>

                    <div class="col-12 col-lg-2">
                        Önümiň ady
                    </div>

                    <div class="col-12 col-lg-1">
                        Sargalan ýeri
                    </div>

                    <div class="col-12 col-lg-2">
                        Alyjynyň ady
                    </div>

                    <div class="col-12 col-lg-2">
                        Alyjynyň tel belgisi:
                    </div>
                    <div class="col-12 col-lg-1">
                        Bahasy
                    </div>

                    <div class="col-12 col-lg-1">
                        Wagty
                    </div>

                    <div class="col-12 col-lg-2 text-danger">
                        Alyja gelen kody yazyň!
                    </div>
                </div>
        @foreach($lastOrders as $lastOrder)
            <div class="row bg-dark-subtle border border-1 align-items-center" >

                <div class="col-12 col-lg-1">
                    {{ $i++ }}
                </div>

                <div class="col-12 col-lg-2">
                    {{ $lastOrder->product_name }}
                </div>

                <div class="col-12 col-lg-1">
                    {{ $lastOrder->class_name }}
                </div>

                <div class="col-12 col-lg-2">
                    {{ $lastOrder->customer_name }}
                </div>

                <div class="col-12 col-lg-2">
                    {{ $lastOrder->phone_number }}
                </div>

                <div class="col-12 col-lg-1">
                    {{ $lastOrder->price }}
                </div>

                <div class="col-12 col-lg-1">
                    {{ $lastOrder->created_at->format('H:i') }}
                </div>

                <div class="col-12 col-lg-2">
                    <form method="POST" action="{{ route('updateOrder', $lastOrder->id) }}" >
                        @csrf
                        @method('PATCH')
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control mx-2" id="delivered_or" name="delivered_or"  >
                            <button type="submit" class="btn btn-primary ">Update</button>
                        </div>
                    </form>
                </div>


            </div>
            @endforeach
            @endif
        </div>



@endsection

