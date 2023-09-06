@extends('principale')

@section('title', "Le auto che hai noleggiato")

@section('content')
    <div class="container">
        <h2 class="mb-5">Ecco tutte le auto che hai noleggiato:</h2>

        <div class="row justify-content-center">
            @foreach($automobili as $auto)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset($img_path = 'images/auto/' . $auto->nome_img . '_principale.jpg')}}" class="custom_card" alt="Foto Automobile">
                        <div class="card-body">
                            <h2 class="card-title mb-3">{{$auto->marca}} {{$auto->modello}} - {{$auto->anno}}</h2>
                            <p class="card-text">Noleggiata dal: {{$auto->data_inizio}}</p>
                            <p class="card-text">fino al: {{$auto->data_fine}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        @include('pagination.paginator', ['paginator' => $automobili->withQueryString()])
    </div>
@endsection