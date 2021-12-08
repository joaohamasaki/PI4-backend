<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastro de Adicionais</title>
</head>

<body>    
    @include('layouts.menu')    
    <main>
        <div class="container mt-5">
            <h1>Cadastre seus Adicionais!</h1>
            <form method="POST" action="{{route('add.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <span class="form-label mt-2">Nome do Adicional</span>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <span class="form-label mt-2">Preço</span>
                        <input type="number" name="price" min="0.00" max="100000.00" step="0.01" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit " class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>