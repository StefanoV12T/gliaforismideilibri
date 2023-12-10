<x-main>
    
    <div class="container overlay card py-5 mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <h2 class="neonText2">Registrati</h2>
                <form action="{{route('register')}}" method="POST">
                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                            @error('email') <span class="small text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="col-12">
                            <label for="name">Username</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @error('name') <span class="small text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="col-12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password') <span class="small text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="col-12">
                            <label for="password_confirmation">Conferma password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        
                        </div>
                        <div>
                            <button type="submit" class="btn btn-warning">Registrati</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-main>