<x-main>

    <x-success/>
    <x-denied/>

    <div class="container card overlay  mt-5">
        <div class="row align-content-center ">
            <div class="col-1"></div>
            <div class="col-10 card overlayRevisor my-5">

                <h1 class="card text-center bg-danger-subtle text-capitalize p-3 m-5">{{$review_to_check ? 'Ecco la recensione da controllare' : 'Non ci sono recensioni da controllare'}}</h1>

                 

                @if ($review_to_check)
                   
                    <h2 class="bg-warning text-center p-2">{{$review_to_check->title}}</h2>
                    
            
                    @if (!$review_to_check->images()->get()->isEmpty())
                    @foreach ($review_to_check->images as $image)
                        
                    <img src="{{Storage::url($image->path)}}" class="img-fluid" alt="Brohm Lake">
                    @endforeach
                    {{-- @else
                    <img src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Brohm Lake">   --}}
                    @endif
                        
                    <p>{!!$review_to_check->body!!}</p>    

                    <form action="{{route('revisor.accept_review', ['review'=>$review_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn bg-success px-3 mb-2" type="submit">Accetta</button>
                    
                    
                    </form>
            
                    <form action="{{route('revisor.reject_review', ['review'=>$review_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn bg-danger px-2 mb-2" type="submit">Rifiuta</button>
                        
                        
                        </form>
                        
                @else
                <div class="space"></div>    
                <div class="space2"></div>    
            
            
            
            
            
            
            
            
            
                @endif
                @if($reviews_refused)
                 <h2>Lista recensioni rifiutate </h2>

                 @foreach ($reviews_refused as $refused)
                        
                
                  <div class="my-2">
                        

                            <h6 class="bg-warning text-center p-2 d-inline">{{$refused->title}}</h6>
                            {{$refused->is_acepted}}
                            <form  class="m-3 d-inline" action="{{route('revisor.cancel_review', ['review'=>$refused])}}" method="POST">
                            @csrf
                            @method('PATCH')
                                <button class="btn btn-dark shadow py-0 neonText2 recall" type="submit">Revisiona di nuovo</button>
                            </form>
                    </div>     

                 @endforeach


                   
                    
                    
                    @endif


            </div>
        </div>
    </div>
    
</x-main>