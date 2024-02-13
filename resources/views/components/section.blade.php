<div class="container">
    <div class="row">
        <div class="col-12 overlay my-5 card">
            <h2 class="h2 m-5 fw-bold neonText2">Ultime recensioni</h2>
            <div class="row">
                @foreach ($reviews as $review)
                
                <div class="col-12 col-md-6 col-lg-4 my-4">
                    <div class="card mx-auto shadow-mrk h-100" data-aos="zoom-in"  data-aos-duration="300" style="width: 18rem;">
                        <img src="
                        {{-- {{!$review->images()->get()->isEmpty() ? $review->images()->first()->getUrl(400,300) :  --}}
                        https://picsum.photos/400/300
                    {{-- }} --}}
                    " class="card-img-top" alt="...">
                        <div class="card-body " >
                          <h5 class="card-title p-1 title-dimension overflow-hidden" >{{$review->title}}</h5>
                          <span>di</span>
                          <h6 class="d-inline">{{$review->author}}</h6>
                            <a href="{{route('show-review', $review)}}" class="btn w-100 btn-warning">Leggi recensione</a>
                            {{-- <a href="{{route('categoryShow',['category'=>$review->category])}}" class="btn w-100 my-2 btn-warning">{{__('ui.category')}}:</a> --}}
                            <p class="card-footer bg-white">Recensito il: {{$review->created_at->format('d/m/y')}} <br>Da: {{$review->user->name}}</p>
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
</div>