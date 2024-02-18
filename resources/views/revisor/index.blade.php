<x-main>
    <h1>{{$review_to_check ? 'Ecco la recensione da controllare' : 'Non ci sono recensioni da controllare'}}</h1>

    @if ($review_to_check)
        <h2>{{$review_to_check->title}}</h2>





        <form action="{{route('revisor.accept_review', ['review'=>$review_to_check])}}" method="POST">
        @csrf
        @method('PATCH')
        <button type="submit">Accetta</button>
        
        
        </form>

        <form action="{{route('revisor.reject_review', ['review'=>$review_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit">Rifiuta</button>
            
            
            </form>










    @endif
</x-main>