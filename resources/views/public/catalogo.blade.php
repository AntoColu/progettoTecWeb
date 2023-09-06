@extends('principale')

@section('title', 'Catalogo noleggi')

@section('css')
    <link rel="stylesheet" href="{{asset("css/catalogo.css")}}">
@endsection

@section('js')
    <script>
        $(function() {
            // Controllo gli estremi di prezzo, in modo che il prezzo massimo
            // non sia mai minore del prezzo minimo
            $("#min-prezzo").on('change', function(event) {
                $("#max-prezzo").val(parseInt($(this).val()));
            });

            $("#max-prezzo").on('change', function(event) {
                if(parseInt($(this).val()) < parseInt($("#min-prezzo").val())){
                    $(this).val(parseInt($("#min-prezzo").val()));
                }
            });
        })
    </script>
@endsection

@section('content')
    <div id="sidebar">
        <!-- Barra laterale dove è possibile filtrare le auto per categoria e prezzo -->
        <aside>
            {{ Form::open(['route' => 'catalogo-filtrato', 'id' => 'catalogo-filtrato-form', 'method' => 'get']) }}
            
            <h2>Categoria:</h2>
            {{ Form::select('catId', ['1' => 'Piccole', '2' => 'Medie', '3' => 'Grandi', '4' => 'SUV'], null, ['placeholder' => 'Scegli una categoria'], ['id' => 'catId']) }}
            
            <br><br>

            <h2>Fascia di prezzo:</h2>
            {{ Form::label('min-prezzo', 'Min:') }}
            {{ Form::number('min-prezzo', old('min-prezzo', ''), ['placeholder' => 'Prezzo minimo', 'id'=>'min-prezzo', 'min'=>0]) }}
            
            {{ Form::label('max-prezzo', 'Max:') }}
            {{ Form::number('max-prezzo', old('max-prezzo', ''), ['placeholder' => 'Prezzo massimo', 'id'=>'max-prezzo', 'min'=>0]) }}
            
            <br><br>

            {{ Form::submit('Filtra', ['class' => 'btn btn-primary', 'id'=>'bottone']) }}

            {!! Form::close() !!}
        </aside>
    </div>
    <div class="container">
        <section class="catalogo">
            <h1 class="mt-5 mb-3">Auto disponibili al noleggio</h1>
            <!-- Elenco di tutte le auto a catalogo, usando la struttura di Bootstrap "card" -->
            @if($automobili)
                <div class="row justify-content-center">
                    @foreach($automobili as $auto)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{asset($img_path = 'images/auto/' . $auto->nome_img . '_principale.jpg')}}" class="card-img-top custom_card" alt="Foto Automobile">
                                {{--<img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . '_principale'})}}" class="card-img-top custom_card" alt="Foto Automobile">--}}
                                <div class="card-body">
                                    <h3 class="card-title">{{$auto->marca}} {{$auto->modello}} - {{$auto->anno}}</h3>
                                    <p class="card-text">{{$auto->descrizione}}</p>
                                    <h5 class="card-text">Prezzo giornaliero: € {{$auto->prezzo}}</h5>
                                    <a href="{{ route('dettagli-auto', [$auto->targa])}}" class="btn btn-primary">Vai al noleggio</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="container mt-5">
                    @include('pagination.paginator', ['paginator' => $automobili])
                </div>
            @else
                <h2 class="mt-5" style="height: 100%">Nessun risultato trovato</h2>
            @endif
        </section>
    </div>

    <!-- Sezione per eventuale messaggio di successo del noleggio o di errore -->
    <div class="text-center mt-4">
        @if(session('success'))
            <strong style="color: green">{{ session('success') }}</strong>
        @endif
        @error('auto-occupata')
        <span style="color: red">{{ $message }}</span>
        @enderror
    </div>
@endsection