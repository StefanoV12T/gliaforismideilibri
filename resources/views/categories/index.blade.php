<x-main>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    @if(count($categories)>0)  
    <div class="container card overlay mt-5">
        <table class="">
            <thead>
              <tr>
                <th class=" py-2" scope="col">Id</th>
                <th class=" py-2" scope="col">Categoria</th>
                <th class=" py-2" scope="col">Autore</th>
                <th class=" py-2" scope="col">Opzioni</th>
              </tr>
            </thead>
           
            <tbody>
                
    
               
                {{-- @dd(count($categories)) --}}
                @foreach ($categories as $category )
                
                    
                    <th class="border-top py-3 border-black" scope="row">{{$category['id']}}</th>
                    <td class="border-top py-3 border-black">{{$category['name']}}</td>
                    {{-- <td>
                        @foreach ($category->articles as $article )
                        {{$article->title}}
                            
                        @endforeach
                    </td> --}}
                    <td class="border-top border-black">ciao</td>
                    <td class="border-top border-black"><a class="btn btn-warning" href="{{route('categories.edit', $category)}}">modifica</a>
                        <form  class="d-inline" action="{{route('categories.destroy', $category)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger " id="submitButton" type="submit">Cancella</button>
                        </form>
                        
                    </td>
            </tbody>  
                @endforeach 
                 
          </table>
    </div>
    
      @else
      <form  class="container text-center mt-5" action="{{route('categories.create')}}" method="get">
          <button class="btn btn-danger btn-lg" id="submitButton" type="submit">Aggiungi Categoria</button>
      </form>
      @endif     


</x-main>