@extends('principale')

@section('title', "Le auto che hai noleggiato")

@section('content')
    <div class="container">
        <h2>Ecco tutte le auto che hai noleggiato:</h2>

        <div class="row justify-content-center">
            @foreach($automobili as $auto)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{$img_path = 'images/auto/' . $auto->nome_img . '_principale.png'}}
                        <img src="{{asset($img_path)}}" class="card-img-top custom_card" alt="Foto Automobile">
                        {{--<img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . '_principale'})}}" class="card-img-top custom_card" alt="Foto Automobile">--}}
                        <div class="card-body">
                            <h3 class="card-title">{{$auto->marca}}</h3>
                            <h3 class="card-title">{{$auto->modello}}</h3>
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