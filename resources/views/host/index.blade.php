<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Cadastro</title>
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
            <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div>
            @endif
            <div id="search-container" class="col-md-12">
                <h1>Informações</h1>
            </div>
            <div class="align-self-center mt-3">
                <a href="{{route ('host.create')}}" class="btn btn-md btn-success">Cadastre seus dados</a>
            </div>
            <div class="row mt-3">            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome da Empresa</th>
                            <th>Endereço</th>
                            <th>Número</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>CEP</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hosts as $host)
                        <tr>
                            <td>{{$host->id}}</td>
                            <td>{{$host->name}}</td>
                            <td>{{$host->address}}</td>
                            <td>{{$host->number}}</td>
                            <td>{{$host->city}}</td>
                            <td>{{$host->state}}</td>
                            <td>{{$host->code}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Visualizar</a>
                                <a href="{{ route('host.edit', $host->id)}}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('host.destroy', $host->id) }}" method="POST" onsubmit="return remover()" class="d-inline">
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