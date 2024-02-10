<div class="container ">
    <div class="row ms-5">
        @dd($reviews)
        <div class="col-12 col-lg-5 myHeight my-5"><img src="{{asset('img\OIP (1).jfif')}}" alt="" class="img-fluid card h-100">
        <h3 class="text-white">Titolo</h3>
        <a href="<a href="{{route('show-review', $review)}}" class="btn w-100 btn-warning">Leggi recensione</a>">leggi recensione</a>
        <p  class="text-white">questa è la <strong>recensione</strong></p>
        </div>
        <div class="col-12 col-lg-5 myHeight my-5"><img src="{{asset('img/download.jfif')}}" alt="" class="img-fluid card h-100"><h3 class="text-white">Titolo</h3>
        <a href="<a href="{{route('show-review', $review)}}" class="btn w-100 btn-warning">Leggi recensione</a>">leggi recensione</a>
        <p  class="text-white">questa è la <strong>recensione</strong></p>
        </div>
    </div>

   

    {{-- <div class="container">
        <div class="row">
            <div class="col-12 overlay my-5 card">
                <h2 class="h2 m-5 fw-bold neonText2">{{__('ui.allAnnouncements')}}</h2>
                <div class="row">
                    @foreach ($reviews as $review)
                    <div class="col-12 col-md-6 col-lg-4 my-4">
                        <div class="card mx-auto shadow-mrk h-100" data-aos="zoom-in"  data-aos-duration="300" style="width: 18rem;">
                            <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/400/300'}}" class="card-img-top" alt="...">
                            <div class="card-body " >
                              <h5 class="card-title title-dimension overflow-hidden" >{{$announcement->title}}</h5>
                                
                                <p class="card-text">{{__('ui.price')}}: €{{$announcement->price}}</p>
                                <a href="{{route('announcement.show',compact('announcement'))}}" class="btn w-100 btn-warning">{{__('ui.details')}}</a>
                                <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="btn w-100 my-2 btn-warning">{{__('ui.category')}}: 
                                  
                                @switch(session('locale'))
                                @case('en')
                                {{$announcement->category->English}}
                                @break
                                @case('es')
                                {{$announcement->category->Spanish}}
                                @break
                                
                                @default
                                {{$announcement->category->name}}
                                @endswitch
                    

                                </a>
                                <p class="card-footer bg-white">{{__('ui.publishedOn')}}: {{$announcement->created_at->format('d/m/y')}} <br>{{__('ui.author')}}: {{$announcement->user->name}}</p>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}



</div>