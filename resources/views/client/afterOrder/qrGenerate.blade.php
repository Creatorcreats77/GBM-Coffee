@extends('client.layouts.layout')
@section('qrGenerate')
    @if (session('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    @endif
   <div class="container-lg text-center">
       <div class="text-danger pt-3">
           Bellik: Şu aşakdaky görkezilen kody ýa-da qrkody belläp goýmagyňyzy ýatladýarys!
       </div>
       <div>
           Sargydyňyz gelen wagty dostawsiga görkeziň!
       </div>
       <div class="text-danger pt-3">
           Bellik: Grammatik ýalňyşlyklary soň düzederis!
       </div>
       <div class="fw-bold py-4">
           {{ $fakeNum }}
       </div>
       <div class="pb-5">
           <img id="qr_code_id" src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data={{ $fakeNum }}" alt="Bellenen ýere tekst ýa-da url ýaz">
       </div>
   </div>

@endsection
