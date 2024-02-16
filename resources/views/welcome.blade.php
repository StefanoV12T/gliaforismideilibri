<x-main>
   
  {{-- segue backup x-section --}}
  <div class="container">
    <div class="row">
      <div class="col-12 overlay my-5 card">
        <h2 class="h2 m-5 fw-bold neonText2 text-white">Ultime recensioni</h2>
          <div class="row">
            <x-section :reviews="$reviews"/>    
          </div>
      </div>
    </div>
  </div>

 
</x-main>