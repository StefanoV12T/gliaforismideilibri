<x-main>
    <div class="spazio"></div>
    <div class="container overlay card p-5 mt-5">
        <div class="row">
            <div class="col-md-6 col-12 ">
            
                <h2 class="neonText2">{{$review->title}}</h2>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  @if ($review->images)
                  <div class="carousel-inner">
                      @foreach ($review->images as $image )
                          <div class="carousel-item @if($loop->first)active  @endif ">
                              <img src="{{Storage::url($image->path)}}" alt="" class="img-fluid p-3 rounded" alt="">
                          </div>
                      @endforeach
                  </div>
                      
                  @else
                  
                  
                  {{-- @endif --}}
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="https://picsum.photos/1200/700" class="d-block img-fluid w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="https://picsum.photos/1200/701" class="d-block img-fluid w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                          <img src="https://picsum.photos/1200/699" class="d-block img-fluid w-100" alt="...">
                      </div>
                      @endif  
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>

    {{-- @dd($review->category_id) --}}
            <div class="col-md-6 mt-5 col-12">
                <div class="card-body fw-bold">
                    {{-- <h5 class="card-title mt-3">{{$review->title}}</h5> --}}
                    <p class="card-text mt-5">{{$review->body}}</p>
                    <p class="card-text">{{__('ui.price')}}: €{{$review->price}}</p>
                    @if ($review->category_id)
                        
                    <a href="{{route('categories-searched',['category'=>$review->category_id])}}" class=" my-3 btn btn-warning">{{$review->category_id}}: 
                       
                    @endif                                 
                    <p class="card-footer">recensito il , <br>Da: 
                        
                        {{$review->author}}</p>
                        

                    @guest
                        
                    @else
                        @if (Auth::user()->is_revisor)
                        <div class="col-12 col-md-6 col-lg-5 mt-5 card h-100 pb-2 shadow-mrk border border-danger border-5">
                            <div>
                                
                                <h6 class="m-3"> {{__('ui.wantToCancel')}}</h6>
                            </div>
                                <form  class="m-3" action="{{route('revisor.cancel_review', ['review'=>$review])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                    <span class="fw-bold">{{__('ui.useTheForce')}}</span>
                                    <button class="btn btn-dark shadow py-0 neonText2 recall" type="submit">{{__("ui.recall")}}</button>
                                </form>
                        </div>      
                        @endif
                        
                        @endguest
                  </div>
                  
                  
            </div>


        </div>
        
        
    </div>
   <div class="spazio_2"></div>
</x-main>