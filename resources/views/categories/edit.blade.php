<x-main>
    <div class="container px-5 my-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card overlay border-0 rounded-3 shadow-lg">
              <div class="card-body p-4">
                <div class="text-center">
                  <div class="h1 ">Modifica Categoria</div>
                  
                </div>
                @if (session()->has('success'))
      <div class="alert alert-success">
          {{session('success')}}
      </div>
      @endif
                <form  action="{{route('categories.update', $category)}}" method="POST">
                  @csrf
                  @method('PATCH')
                  <!-- Name Input -->
                  <label for="name">Categoria</label>
                  <div class=" mb-3">
                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" title="name" value="{{$category['name']}}" maxlength="150" />
                    
                  </div>
      
  
                  <!-- Submit button -->
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                  </div>
                </form>
                
      
              </div>
            </div>
          </div>
        </div>
      </div>
      
   
  </x-main>