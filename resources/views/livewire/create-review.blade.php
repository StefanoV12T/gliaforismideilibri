<div class="container overlay my-5 card">
   <div class="row mx-5">
       <div class="col-12 col-lg-6">
           <h2 class="my-5 neonText2">Crea Revisione</h2>
           
         @if(session()->has('success'))
         {{-- <x-success/> --}}
         <div class="alert-success alert">
             {{session('success')}}
         </div>
         @endif
     
         <form wire:submit.prevent="store">
            @csrf
           <div>
               <label for="title">Titolo del libro</label>
               <input type="text" class="form-control @error('title')is-invalid @enderror" wire:model.blur="title">
               @error('title') <span class="small text-danger">{{$message}}</span>@enderror
           </div>
           <div>
               <label for="body">Recensione</label>
               <textarea type="text" rows="5" class="form-control @error('body')is-invalid @enderror" wire:model.lazy="body"></textarea>
               @error('body') <span class="small text-danger">{{$message}}</span>@enderror
           </div>  
           
           
           <div>
            <label for="categories">Categories:</label>
            @foreach ($categories as $category)
                <div>
                    <input type="checkbox" id="{{ $category->id }}" value="{{ $category->id }}" wire:model="selectedCategories">
                    <label  for="{{ $category->id }}">{{ $category->name }}</label>
                    
                </div>
                
            @endforeach
            @error('selectedCategories') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
               {{-- <label for="category"></label>
               <select wire:model.defer="category" id="category" name="category" class="form-control">
                  <option value="">
                       Scegli Categoria
                  </option>
                  @foreach ($categories as $category)
                  @switch(session('locale'))
                               @case('en')
                               <option value="{{$category->id}}">{{$category->English}}</option>
                               @break
                               @case('es')
                               <option value="{{$category->id}}">{{$category->Spanish}}</option>
                               @break
                               
                               @default
                               <option value="{{$category->id}}">{{$category->name}}</option>
                               @endswitch
                  @endforeach
                      
               </select> --}}
                  @error('category') <span class="small text-danger">{{$message}}</span>@enderror
           </div>
       
           {{-- <div class="my-3">
               <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*')is-invalid @enderror" placeholder="Img"/> @error('temporary_images') <span class="small text-danger">{{$message}}</span>@enderror
           </div>
           @if (!empty($images)) --}}
           {{-- @dd(@$image) --}}
           {{-- <div class="row">
               <div class="col-12 col-lg-9">
                   <h3 class="neonText2">Photo preview</h3>
                   <div class="row border border-2 border-warning rounded py-4">
                       @foreach ($images as $key => $image)
                       
                           <div class="col my-3">
                              <div class="img-preview mx-auto rounded mb-2" style="background-image: url({{$image->temporaryUrl()}}); background-position: center; background-size: contain; background-repeat: no-repeat;" >
                              </div>
                           </div>
                           <button class="btn btn-danger d-block text-center-mt-2 mx-auto" wire:click="removeImage({{ $key }})" type="button">{{__('ui.delete')}}
                           </button>
                       @endforeach
                   </div>
                   

               </div>
            </div>
               
           @endif --}}



           <div class="my-5">
               <button class="btn btn-warning" type="submit">Pubblica recensione</button>
           </div>
          </form>
       </div>
   </div>     
       
</div>
