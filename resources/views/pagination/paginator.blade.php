@if ($paginator->lastPage() != 1)
    <ul class="pagination justify-content-center my-2">

        <!-- Link alla prima pagina -->
        @if (!$paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}">Torna all'inizio</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Torna all'inizio</span>
            </li>
        @endif

        <!-- Link alla pagina precedente -->
        @if ($paginator->currentPage() != 1)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Precedente</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Precedente</span>
            </li>
        @endif

        <!-- Link alla pagina successiva -->
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Successivo</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Successivo</span>
            </li>
        @endif

        <!-- Link all'ultima pagina -->
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">Vai alla fine</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Vai alla fine</span>
            </li>
        @endif
    </ul>
@endif
