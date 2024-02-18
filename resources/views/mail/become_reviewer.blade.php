
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Open+Sans&family=Rajdhani:wght@300;500&family=Sigmar&display=swap" 
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/card.css">

    
    <title>Gliaforsimideilibri.it</title>
</head>
<body>
    <div class="overlay  m-5 p-4 text-white">
        <h4 class="neonText">Un utente ha richiesto di lavorare con noi, e diventare:</h4>
        <h2>Recensore</h2>
        <h4 class="neonText2">Ecco i suoi dati:</h4>
        <div class="fs-3">

            <p>Nome: {{$user->name}}</p>
            <p>Email: {{$user->email}}</p>
            <p>Se vuoi renderlo revisore clicca qui:</p>
            <a class="recall text-decoration-none text-warning" href="{{route('make.reviewer',compact('user'))}}">Rendi recensore</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>