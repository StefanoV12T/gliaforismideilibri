@foreach ($reviews as $review)
                    
                    <div class="col-12 col-md-6 col-xl-4 my-4">
                      <div class="flip-card-container" >
                            <div class="flip-card">      
                              <div class="card-front">
                                <figure>
                                  <div class="img-bg"></div>
                                  <img src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Brohm Lake">
                                  <figcaption><h5 class="card-title p-1 title-dimension overflow-hidden" >{{$review->title}}</h5>
                                    <span>di</span>
                                    <h6 class="d-inline">{{$review->author}}</h6></figcaption>              
                                </figure>
                                <ul class="ul px-0">
                                  <li class="li"> <p class="card-footer">Recensito il: {{$review->created_at->format('d/m/y')}} </p></li>
                                  <li class="li"><p class="card-footer">Da: {{$review->user->name}}</p></li>
                                  <li class="li">Categorie: </li>
                                  @foreach ($review->categories as $category)
                                                   <li class="li">{{$category->name}}</li>                              
                                                   @endforeach 
                                </ul>
                              </div>
                          
                              <div class="card-back">
                                <figure>
                                  <div class="img-bg"></div>
                                  <img src="https://images.unsplash.com/photo-1486162928267-e6274cb3106f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Brohm Lake">
                                </figure>
                                    <a href="{{route('show-review', $review)}}" class="btn button  t-w">Leggi recensione</a>      
                                <div class="design-container">
                                  <span class="design design--1"></span>
                                  <span class="design design--2"></span>
                                  <span class="design design--3"></span>
                                  <span class="design design--4"></span>
                                  <span class="design design--5"></span>
                                  <span class="design design--6"></span>
                                  <span class="design design--7"></span>
                                  <span class="design design--8"></span>
                                </div>
                              </div>
                            </div>
                          </div>    

                        {{-- <div class="card mx-auto shadow-mrk h-100" data-aos="zoom-in"  data-aos-duration="300" style="width: 18rem;">
                            <img src="
                            {{-- {{!$review->images()->get()->isEmpty() ? $review->images()->first()->getUrl(400,300) :  --}}
                            {{-- https://picsum.photos/400/300 --}}
                        {{-- }} --}}
                        {{--" class="card-img-top" alt="...">
                            <div class="card-body " >
                              <h5 class="card-title p-1 title-dimension overflow-hidden" >{{$review->title}}</h5>
                              <span>di</span>
                              <h6 class="d-inline">{{$review->author}}</h6>
                                <a href="{{route('show-review', $review)}}" class="btn w-100 btn-warning">Leggi recensione</a>
                                {{-- <a href="{{route('categoryShow',['category'=>$review->category])}}" class="btn w-100 my-2 btn-warning">{{__('ui.category')}}:</a> --}}
                               {{-- <p class="card-footer bg-white">Recensito il: {{$review->created_at->format('d/m/y')}} <br>Da: {{$review->user->name}}</p>
                               <h6>Categorie: </h6>
                               @foreach ($review->categories as $category)
                               <a class="btn  h-10 btn-warning p-1" href="{{route('categories-searched', $category)}}">{{$category->name}}</a>                              
                               @endforeach 
                            </div>
                          </div> --}}
                    </div>
                    @endforeach







{{-- vecchia section --}}

{{-- <div class="container">
    <div class="row">
        <div class="col-12 overlay my-5 card">
            <h2 class="h2 m-5 fw-bold neonText2">Ultime recensioni</h2>
            <div class="row">
                @foreach ($reviews as $review)
                
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card mx-auto shadow-mrk h-100" data-aos="zoom-in"  data-aos-duration="300" style="width: 18rem;">
                        <img src="
                        {{-- {{!$review->images()->get()->isEmpty() ? $review->images()->first()->getUrl(400,300) :  --}}
                        {{-- https://picsum.photos/400/300 --}}
                    {{-- }} 
                    " class="card-img-top" alt="...">
                        <div class="card-body " >
                          <h5 class="card-title p-1 title-dimension overflow-hidden" >{{$review->title}}</h5>
                          <span>di</span>
                          <h6 class="d-inline">{{$review->author}}</h6>
                            <a href="{{route('show-review', $review)}}" class="btn w-100 btn-warning">Leggi recensione</a>
                            {{-- <a href="{{route('categoryShow',['category'=>$review->category])}}" class="btn w-100 my-2 btn-warning">{{__('ui.category')}}:</a> --}}
                            {{-- <p class="card-footer bg-white">Recensito il: {{$review->created_at->format('d/m/y')}} <br>Da: {{$review->user->name}}</p>
                           <h6>Categorie: </h6>
                           @foreach ($review->categories as $category)
                           <a class="btn  h-10 btn-warning p-1" href="{{route('categories-searched', $category)}}">{{$category->name}}</a>                              
                           @endforeach 
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>  --}}
