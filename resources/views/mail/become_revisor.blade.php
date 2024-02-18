
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Open+Sans&family=Rajdhani:wght@300;500&family=Sigmar&display=swap" 
    rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <title>Gliaforsimideilibri.it</title>
</head>
<body>
    <div class="overlay  m-5 p-4 text-white">
        <h4 class="neonText">Un utente ha richiesto di lavorare con noi, e diventare:</h4>
        <h2>Revisore</h2>
        <h4 class="neonText2">Ecco i suoi dati:</h4>
        <div class="fs-3">

            <p>Nome: {{$user->name}}</p>
            <p>Email: {{$user->email}}</p>
            <p>Se vuoi renderlo revisore clicca qui:</p>
            <a class="recall text-decoration-none text-warning" href="{{route('make.revisor',compact('user'))}}">Rendi revisore</a>
        </div>
    </div>
    @livewireScripts
</body>
</html>