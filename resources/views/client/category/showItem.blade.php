@extends('client.layouts.layout')
@section('showItem')
    @if (session('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    @endif
    <div class="container-lg py-4">
        <div class="row g-3 g-sm-2">
            @foreach($product_selected as $product)
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/coffe.jpg') }}" class="card-img-top img-fluid" alt="nothing">
                </div>
                <div class="col-12 col-lg-4">
                    <div class="fw-bold">
                        Ady: {{ $product->name}}
                    </div>
                    <div class="py-3">
                        <strong>Bölüm:</strong> {{ $product->category['name']}}
                    </div>
                    <div class="py-3">
                        <strong>Barada: </strong> {{ ($product->product_info)}}}
                    </div>
                    <div class="py-3 text-warning">
                        <strong class="pe-2 text-dark">Bahasy: </strong> {{ ($product->price)}} m
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="">


{{--Satyn almak ucin ugradylan--}}
                        <form action="{{ route('order') }}" method="post">
                            @csrf
                            <div class="py-2">
                                <label class="py-2 fw-bold">Klas</label></br>
                                <select name="class_name" id="class_name" class="form-control">
                                    @foreach($classes as $class)
                                        <option value="{{ $class  }}">
                                            {{ $class }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <label class="fw-bold py-2">Alyjynyň ady</label></br>
                            <input type="text" name="customer_name" id="customer_name" class="form-control"></br>

                            <label class="fw-bold py-2">Telefon belgisi</label></br>
                            <input type="number" name="phone_number" id="phone_number" class="form-control"></br>

                            <input type="hidden" name="product_name" value="{{ $product->name }}">

                            <input type="hidden" name="price" value="{{ $product->price }}">

                            <input  type="submit" value="Sargyt etmek" class="btn btn-success w-100"><br>
                        </form>






                    </div>
                </div>

            @endforeach
        </div>
    </div>
    <hr>

    <div class="container-lg py-4">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3 g-sm-2">
            @foreach($products as $product)
                @if($product->id != $id)
                    <div class="col text-center d-flex justify-content-center">
                        <div class="card">
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
                @endif
            @endforeach
        </div>
    </div>
@endsection




