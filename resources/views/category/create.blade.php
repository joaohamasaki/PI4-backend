<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastrar Categoria</title>
</head>

<body> 
    <main>
        @include('layouts.menu')
        <div class="container mt-5">
            <h1>Cadastre sua Categoria!</h1>
            <form method="POST" action="{{route('category.store')}}">
                @csrf
                <div class="row">
                    <span class="form-label">Nome da Categoria</span>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="row mt-3">
                    <button type="submit " class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>