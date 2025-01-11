<div class="container-fluid py-4 bg-dark text-light mb-0 mt-5">
    <div class="row">
        {{-- se l'utente non è loggato --}}
        @guest
        <div class="col-12 text-center">
            <p>Grazie per aver visitato il nostro sito</p>
            <p>Registrati o effettua il login per poter commentare le recensioni o richiedete tu stesso di diventare recensore</p>
            <p>Clicca qui</p>
            <a href="{{route('login')}}" class="btn btn-warning text-light shadow my-3">Entra nel sito</a>
            <a href="{{route('register')}}" class="btn btn-warning text-light shadow my-3">Registrati</a>
        </div>
         @else 
        {{-- se l'utente è loggato ma non é nè recensore, nè revisore --}}
         @if(!auth()->user()->is_revisor&& !auth()->user()->is_reviewer)

         <div class="col-12 text-center">
            <p>Grazie per esserti registrato</p>
            <p>Vuoi diventare un recensore?</p>
            <p>Clicca qui</p>
            <a href="{{route('become.reviewer')}}" class="btn btn-warning text-light shadow my-3">Diventa Recensore</a>
        </div>
        {{-- se l'utente è un recensore ma non è un revisore --}}
         @elseif(auth()->user()->is_reviewer && !auth()->user()->is_revisor)

        <div class="col-12 text-center">
            <p>Grazie per essere un recensore</p>
            <p>Vuoi diventare un revisore? Questo ti permetterà di revisionare e accettare le recensioni degli altri utenti</p>
            <a href="{{route('become.revisor')}}" class="btn btn-warning text-light shadow my-3">Diventa Recensore</a>
        </div>         
        
        @elseif(auth()->user()->is_revisor)
        <div class="col-12 text-center">
            <p>Grazie per essere un revisore</p>
        </div>
        @endif
        @endguest
    </div>
</div>
