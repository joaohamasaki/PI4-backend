<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Bem Vindo ao Cowork</title>
</head>

<body>
    @include('layouts.menu')
    <main>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="{{route ('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">{{$room->category->name}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$room->name}}</li>
            </ol>
        </nav>
        <div class="row my-2">
            <div class="col-6 mt-2 text-center">
                <img id="fotoShow" src="{{asset($room->image)}}" style="width:750px">

            </div>
            <div class="col-4 text-center">
                <h1>{{$room->name}}</h1>
                <p>{{$room->description}}</p>
                <h6 class="text-start mb-3">Oferecemos em nosso espaço:</h6>
                @foreach($room->adds as $add)                    
                    <a id="infraShow" href="#" class="btn btn-sm d-block my-2">{{$add->name}}</a>
                @endforeach
                <span class="h3 d-block my-4">R$ {{$room->price}}</span>
                <button class="btn btn-lg btn-info mt-3">Reservar Espaço</button>
            </div>


        </div>

    </main>
</body>

</html>