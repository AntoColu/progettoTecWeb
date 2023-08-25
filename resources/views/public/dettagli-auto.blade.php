@extends('layouts.principale')

@section('title', 'Dettagli auto')

@section('content')
    <!--Carosello di foto dell'auto selezionata-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Foto iniziale -->
            <div class="carousel-item active">
                <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img-principale'}) }}" class="image_carousel" alt="Principale">
            </div>

            <!-- Foto successive -->
            <div class="carousel-item">
                <!-- Foto lato destro -->
                <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img-destra'}) }}" class="image_carousel" alt="Lato destro">
            </div>

            <div class="carousel-item">
                <!-- Foto lato sinistro -->
                <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img-sinistra'}) }}" class="image_carousel" alt="Lato sinistra">
            </div>

            <div class="carousel-item">
                <!-- Foto lato frontale -->
                <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img-frontale'}) }}" class="image_carousel" alt="Lato frontale">
            </div>

            <div class="carousel-item">
                <!-- Foto lato posteriore -->
                <img src="data:image/png/jpeg;base64,{{ base64_encode($auto->{$auto->marca . $auto->modello . 'img-posteriore'}) }}" class="image_carousel" alt="Lato posteriore">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <!-- Informazioni dell'auto -->
    <div id="dettagli-auto">
        <h2>
            {{$auto->marca}} {{$auto->modello}}
        </h2>
        <ul style="list-style-type:none;">
            <li>
                <!-- Icona di Bootstrap raffigurante un'auto --> 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                    <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                </svg>
                <h4>
                    Motore: {{$auto->motore}}
                </h4>
            </li>
            <li>
                <!-- Icona di Bootstrap raffigurante una pompa di benzina -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fuel-pump-fill" viewBox="0 0 16 16">
                    <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081V7.5a.5.5 0 0 1-.5.5H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm2.5 0a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5Z"/>
                </svg>
                <h4>
                    Carburante: {{$auto->carburante}}
                </h4>
            </li>
            <li>
                <!-- Icona di Bootstrap raffigurante delle persone -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
                <h4>
                    N. posti: {{$auto->nPosti}}
                </h4>
            </li>
        </ul>
    </div>
@endsection