@extends('principale')

@section('title', "Le auto che hai noleggiato")

@section('content')
    <div class="container" style="margin-bottom: 5%;">
        <h2 class="mb-5">Ecco tutte le auto che hai noleggiato:</h2>

        <div class="row justify-content-center">
            @foreach($automobili as $auto)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset($img_path = 'images/auto/' . $auto->nome_img . '_principale.jpg')}}" class="custom_card" alt="Foto Automobile">
                        <div class="card-body">
                            <h2 class="card-title mb-3">{{$auto->marca}} {{$auto->modello}} - {{$auto->anno}}</h2>
                            <p class="card-text">Noleggiata dal: {{ \Carbon\Carbon::parse($auto->data_inizio)->format('d-m-Y') }}</p> <!-- \Carbon\Carbon::parse($auto->data_inizio)->format('d-m-Y') mi formatta la data in giorno-mese-annno -->
                            <p class="card-text">fino al: {{ \Carbon\Carbon::parse($auto->data_fine)->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        @include('pagination.paginator', ['paginator' => $automobili->withQueryString()])
    </div>
@endsection