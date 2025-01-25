@extends('client.layouts.layout')
@section('create')

    @if (session('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    @endif
    <div class="container-lg py-4">
        <div class="card">
            <div class="py-2">
                <div class="fw-bold">
                    Bar bolan bölümler
                </div>
                <div class="hiding">
                </div>
                @foreach($categories as $key => $value)
                    <div class="row py-1">
                        <div class="col-6 col-lg-3">
                            {{ $i++ .". " . $value  }}
                        </div>
                        <div class="col-6 col-lg-3">
                            <form method="POST" action="{{ route('destroyCat', $key) }}" accept-charset="UTF-8">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch"
                                        onclick="return confirm('Confirm delete?')"><i
                                        class="fa fa-trash-0" aria-hidden="true"></i>Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="card">
            <div class="card-header">Bölüm goşmak</div>
            <div class="card-body">
                <form action="{{ route('createCat') }}" method="post">
                @csrf
            </div>
            <label class="fw-bold py-2">Täze bölüm goşmak</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success w-100"><br>
            </form>
        </div>
    </div>
    </div>

@endsection
