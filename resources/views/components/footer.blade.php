<div class="container-fluid py-4 bg-dark text-light mb-0">
    <div class="row">
        @if (auth()->user()->is_reviewer)
        <div class="col-12 text-center">
            <p>Grazie per essere un recensore</p>
            <p>Vuoi diventare un revisore? Questo ti permetterà di revisionare e accettare le recensioni degli altri utenti</p>
            <a href="{{route('become.revisor')}}" class="btn btn-warning text-light shadow my-3">Diventa Recensore</a>
        </div>         
                @else
        <div class="col-12 text-center">
            <p>Gli Aforismi dei Libri</p>
            <p>Vuoi lavorare con noi?</p>
            <p>Registrati e clicca qui</p>
            <a href="{{route('become.reviewer')}}" class="btn btn-warning text-light shadow my-3">Diventa Recensore</a>
        </div>
        @endif
    </div>
</div>
