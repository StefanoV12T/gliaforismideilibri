@if(session()->has('denied'))
                <div class="alert alert-danger m-3">{{session('denied')}}
                </div>
        @endif