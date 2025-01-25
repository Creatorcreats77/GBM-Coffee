@extends('client.layouts.layout')
@section('show')
    <div class="container-lg py-4">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3 g-sm-2">
            @foreach($products as $product)
                <div class="col text-center d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="border border-primary border-bottom-0">
                            <img src="{{ asset('img/coffe.jpg') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body border border-black border-top-0">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->product_info, 70) }}</p>
                            <div class="d-flex justify-content-around">
                                <a href="{{ route('product', $product->id) }}" class="btn btn-primary">View</a>
                                <div class=" text-danger">{{$product->price ."m"}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


