<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaços</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script>
        function remover() {
            return confirm('Você deseja excluir seu cadastro?');
        }
    </script>
</head>

<body>
    @include('layouts.menu')
    <main>
        <section class="container mt-5">
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div>
            @endif
            <div id="search-container" class="col-md-12">
                <h1>Espaços</h1>
            </div>
            <div class="align-self-center mt-3">
                <a id="btncreate" href="{{route('room.create')}}" class="btn btn-md btn-success">Crie seu Espaço</a>
            </div>
            <div id="rooms-container" class="col-md-12 mt-3">
                <div id="cards-container" class="row">
                    @foreach($rooms as $room)
                    <div class="card col-md-3">
                        <div class="card-body">                            
                            <img id="img" src="{{asset($room->image)}}">
                            <h5 class="card-title mt-3">{{$room->name}}</h5>
                            <p class="card-date">{{date('d.m.Y', strtotime($room->published_at))}}</p>
                            <p>R$ {{$room->price}}</p>
                            @foreach($room->adds as $add)
                                <p>{{$add->name}}</p> 
                            @endforeach                      
                        </div>                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                                <a href="{{route('room.edit', $room->id)}}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{route('room.destroy', $room->id)}}" method="POST" onsubmit="return remover()" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">APAGAR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</body>

</html>