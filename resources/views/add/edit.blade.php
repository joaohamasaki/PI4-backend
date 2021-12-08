<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Editar Adicionais</title>
</head>

<body>
    @include('layouts.menu')
    <main>
        <div id="criar" class="container mt-5">
            <h1>Edite seus Adicionais</h1>
            <form method="POST" action="{{route('add.update', $add->id)}}">
                @csrf
                @method('PATCH')
                <div class="row">
                    <span class="form-label">Nome do Adicional</span>
                    <input type="text" name="name" class="form-control" value="{{$add->name}}">
                </div>

                <div class="row">
                    <span class="form-label">Preço</span>
                    <input type="number" name="price" min="0.00" max="100000.00" step="0.01" class="form-control" value="{{$add->price}}">
                </div>
                <div class="row mt-3">
                    <button type="submit " class="btn btn-success btn-sm">Salvar</button>
                </div>
            </form>

        </div>

    </main>

</body>

</html>