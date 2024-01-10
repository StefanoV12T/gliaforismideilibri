<x-main>
    <div class="container px-5 my-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card border-0 overlay rounded-3 shadow-lg">
              <div class="card-body p-4">
                <div class="text-center">
                  <div class="h1 fw-light">Crea Categoria</div>
                  <p class="mb-4 text-muted">la nuova categoria</p>
                </div>
                <form  action="{{ route('categories.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
      
                  <!-- Name Input -->
                  <div class=" mb-3">
                    <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="nome categoria" data-sb-validations="required" title="name" value="{{old('name')}}" maxlength="150" />
                    @error('name') <span>{{$message}}</span>@enderror
                  </div>
      
      
  
                  <!-- Submit button -->
                  <div class="d-grid">
                    <button class="btn btn-warning" id="submitButton" type="submit">Submit</button>
                  </div>
                </form>
                
      
              </div>
            </div>
          </div>
        </div>
      </div>
      
   
  </x-main>