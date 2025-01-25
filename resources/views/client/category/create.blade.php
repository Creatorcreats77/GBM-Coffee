@extends('client.layouts.layout')
@section('create')

    @if (session('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    @endif
   <div class="container-lg py-4">
       <div class="card">
           <div class="card-header">Product create</div>
           <div class="card-body">

               <form action="{{ route('create') }}" method="post">
                   @csrf
                  <div class="py-2">
                      <label class="py-2 fw-bold">Bölümler</label></br>
                      <select name="category_id" id="category_id" class="form-control">
                          @foreach($categories as $id =>$name)
                              <option value="{{ $id  }}">
                                  {{ $name }}
                              </option>
                          @endforeach
                      </select>
                  </div>

                   <label class="fw-bold py-2">Ady</label></br>
                   <input type="text" name="name" id="name" class="form-control"></br>

                   <label class="fw-bold py-2">Bahasy</label></br>
                   <input type="number" name="price" id="price" class="form-control"></br>

                   <label class="fw-bold py-2">Suratyň adyny görkez wagtlaýynça</label></br>
                   <input type="text" name="image" id="image" class="form-control"></br>

                   <label class="fw-bold py-2">Önüm barada</label></br>
                   <input type="text" name="product_info" id="product_info" class="form-control"></input></br>

                   <input  type="submit" value="Save" class="btn btn-success w-100"><br>
               </form>
           </div>
       </div>
   </div>

<hr>




    @foreach($products as $product)
        <div class="container-lg">
            <div class="row border border-1 text-center align-items-lg-center">
                <div class="col-12 col-lg-1">
                    {{ $i++ }}
                </div>
                <div class="col-12 col-lg-2">
                    <div class="ms-auto me-auto" style="width: 3rem">
                        <img class="w-100" src="{{ asset('img/coffe.jpg') }}">
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                   <strong class="pe-1"> Bölüm: </strong> {{$product->category->name}}
                </div>
                <div class="col-12 col-lg-3">
                    <strong class="pe-1"> Önümiň ady: </strong>{{$product->name}}
                </div>
                <div class="col-12 col-lg-2">
                    {{$product->price . " m"}}
                </div>
                <div class="col-12 col-lg-1">
                    <form method="POST" action="{{ route('destroy', $product->id) }}" accept-charset="UTF-8">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm w-100"  title="Delete Batch"
                                onclick="return confirm('Confirm delete?')"><i
                                class="fa fa-trash-0" aria-hidden="true"></i>Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>


    @endforeach

@endsection
