<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionais</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
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
                <div class="alert alert-success text-center" role="alert">{{session()->get('success')}}</div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger text-center" role="alert">{{session()->get('error')}}</div>
            @endif
            <div id="search-container" class="col-md-12">
                <h1>Itens de Infraestrutura</h1>
            </div>
            <div class="align-self-center mt-3">
                <a href="{{route ('add.create')}}" class="btn btn-md btn-success">Crie seu Item</a>
            </div>
            <div class="row mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Espaço</th>
                            <th>Preço</th>
                            <th>Opçoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($adds as $add)
                        <tr>
                            <td>{{$add->id}}</td>
                            <td>{{$add->name}}({{$add->rooms()->count();}})</td>
                            <td>{{$add->price}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                                <a href="{{route('add.edit', $add->id)}}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{route('add.destroy', $add->id)}}" method="POST" onsubmit="return remover()" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">APAGAR</button>
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