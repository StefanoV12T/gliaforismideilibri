<x-main>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
        
    <table class="tablez">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Categoria</th>
            <th scope="col">Autore</th>
            <th scope="col">Opzioni</th>
          </tr>
        </thead>
       
        <tbody>
            @foreach ($categories as $category )
            
                
                <th scope="row">{{$category['id']}}</th>
                <td>{{$category['name']}}</td>
                {{-- <td>
                    @foreach ($category->articles as $article )
                    {{$article->title}}
                        
                    @endforeach
                </td> --}}
                <td><a class="btn btn-primary" href="{{route('categories.edit', $category)}}">modifica</a>
                    <form  class="d-inline" action="{{route('categories.destroy', $category)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-lg" id="submitButton" type="submit">Cancella</button>
                    </form>
                    
                </td>
        </tbody>  
            @endforeach        
      </table>


</x-main>