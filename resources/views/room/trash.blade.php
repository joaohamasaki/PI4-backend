<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaços - Apagados</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script>
        function restore() {
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
            <h1>Espaços Deletados</h1>
            <div class="row mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Espaço</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Categorias</th>
                            <th>Opçoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <td>{{$room->id}}</td>
                            <td>{{$room->name}}</td>
                            <td>{{$room->description}}</td>
                            <td>{{$room->price}}</td>
                            <td>{{$room->category_id}}</td>
                            <td>
                                <form action="{{route('room.restore', $room->id)}}" method="POST" onsubmit="return restore()" class="d-inline">
                                    @method('PATCH')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">Restaurar</button>                                    
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>

        </section>


    </main>
</body>

</html>