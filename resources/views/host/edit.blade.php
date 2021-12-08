<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Editar Espaço</title>
</head>

<body>
    @include('layouts.menu')
    <main>
        <div id="criar" class="container mt-5">
            <h1>Edite seu cadastro!</h1>
            <form method="POST" action="{{route('host.update', $host->id)}}">
                @csrf
                @method('PATCH')
                <div class="row">
                    <span class="form-label">Nome da empresa</span>
                    <input type="text" name="name" class="form-control" value="{{$host->name}}">
                </div>
                <div class="row mt-3">
                    <div class="col-10">
                        <input type="text" name="address" class="form-control" placeholder="Endereço" value="{{$host->address}}">
                    </div>
                    <div class="col">
                        <input type="text" name="number" class="form-control" placeholder="Número" value="{{$host->number}}">
                    </div>
                    <div class="col-7 mt-3">
                        <input type="text" name="city" class="form-control" placeholder="Cidade" value="{{$host->city}}">
                    </div>
                    <div class="col mt-3">
                        <input type="text" name="state" class="form-control" placeholder="Estado" value="{{$host->state}}">
                    </div>
                    <div class="col mt-3">
                        <input type="text" name="code" class="form-control" placeholder="CEP" value="{{$host->code}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit " class="btn btn-success btn-sm">Salvar</button>
                </div>
            </form>

        </div>

    </main>

</body>

</html>