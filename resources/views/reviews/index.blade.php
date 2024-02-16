<x-main>
    <div class="container">
        <div class="row">
          <div class="col-12 overlay my-5 card">
            <h2 class="h2 m-5 fw-bold neonText2 text-white">Tutte le recensioni</h2>
              <div class="row">
                <x-section :reviews="$reviews"/>   
                {{$reviews->appends(Request::except('page'))->links()}}
              </div>
          </div>
        </div>
      </div>
</x-main>