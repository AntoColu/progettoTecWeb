@extends('principale')

@section('title', 'Catalogo noleggi')

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
    <div class="container">
        <!-- Barra laterale dove è possibile filtrare le auto per categoria e prezzo -->
        <aside class="lateral-bar">
            {{ Form::open(['route' => 'catalogo-filtrato', 'id' => 'catalogo-filtrato-form']) }}
            
            <h2> Categorie </h2>
            {{ Form::select('categoria', ['1' => 'Piccole', '2' => 'Medie', '3' => 'Grandi', '4' => 'SUV'], null, ['placeholder' => 'Scegli una categoria'], ['id' => 'categoria']) }}

            <h2> Fascia di prezzo </h2>
            {{ Form::label('min-prezzo', 'Min:') }}
            {{ Form::number('min-prezzo', $minprezzo, array('placeholder' => 'Prezzo minimo', 'id'=>'min-prezzo', 'min'=>0)) }}
            
            {{ Form::label('max-prezzo', 'Max:') }}
            {{ Form::number('max-prezzo', $maxprezzo, array('placeholder' => 'Prezzo massimo', 'id'=>'max-prezzo', 'min'=>0)) }}
            
            {{ Form::submit('Filtra', ['class' => 'btn btn-primary', 'id'=>'bottone']) }}

            {!! Form::close() !!}
        </aside>

        <section class="catalogo">
            <h1> Auto disponibili al noleggio </h1>
            <!-- Elenco di tutte le auto a catalogo, usando la struttura di Bootstrap "card" -->
            <div class="row justify-content-center">
                @foreach($automobili as $auto)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img_principale'})}}" class="card-img-top custom_card" alt="Foto Automobile">
                            <div class="card-body">
                                <h3 class="card-title">{{$auto->marca}}</h3>
                                <h3 class="card-title">{{$auto->modello}}</h3>
                                <p class="card-text">{{$auto->descrizione}}</p>
                                <h5 class="card-text">Prezzo giornaliero: {{$auto->prezzo}}</h5>
                                <a href="{{ route('dettagli-auto', [$auto->targa])}}" class="btn btn-primary">Vai al noleggio</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('paginator.paginator', ['paginator' => $automobili->withQueryString()])
        </section>
    </div>
@endsection