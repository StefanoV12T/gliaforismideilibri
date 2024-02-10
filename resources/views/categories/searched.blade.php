<x-main>
    <div class="container overlay card mt-5">
        <div class="row">
            <div class="col-12 mt-3">
                <h2 class="h2 my-5 pt-3 fw-bold text-center neonText2">{{$category->name}}</h2>
                <div class="row">
                    @forelse  ( $category->reviews as $review)
                   {{-- @if ($announcement->is_accepted) --}}
                   <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card shadow-mrk mx-auto h-100"  data-aos="zoom-in-down" data-aos-duration="300" style="width: 18rem;">
                        {{-- <img src="{{!$review->images()->get()->isEmpty() ? $review->images()->first()->getUrl(400,300) : 'https://picsum.photos/400/300'}}" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                          <h5 class="card-title">{{$review->title}}</h5>
                          {{-- <p class="card-text">{{$announcement->body}}</p> --}}
                         
                          <a href="{{route('show-review',compact('review'))}}" class="btn btn-warning mb-2 w-100">Leggi recensione</a>
                          
                          <p class="card-footer bg-white">Pubblicato il: {{$review->created_at->format('d/m/y')}} <br>
                            da: {{$review->user->name ?? ''}}</p>
                        </div>
                      </div>
                    </div> 
                   {{-- @endif --}}
                   @empty
                   
                    <div class="col-12 text-center p-5">
                        <p class="h4">Non ci sono recensioni per questa categoria</p>
                        <p class= "h4">Pubblica una nuova recensione: <a href="{{route ('create-review')}}"class="btn-warning btn shadow"> Scrivi recensione</a></p>
                    </div>
                    
                    
                    
                    <div style="height: 150px"></div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-main>