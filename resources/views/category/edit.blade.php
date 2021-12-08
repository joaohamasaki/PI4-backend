<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Editar sua Categoria</title>
</head>

<body>
    <header id="navbarNav">
        <nav class="navbar">
            <a href="{{Route ('room.index')}}">Home</a>
            <a href="#">Logout</a>
        </nav>
    </header>
    <main>
        @include('layouts.menu')
        <div id="criar" class="container mt-5">
            <h1>Edite sua Categoria!</h1>
            <form method="POST" action="{{route('category.update', $category->id)}}">
                @csrf
                @method('PATCH')
                <div class="row">
                    <span class="form-label">Nome do Espaço</span>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                </div>
                <div class="row mt-3">
                    <button type="submit " class="btn btn-success btn-sm">Salvar</button>
                </div>
            </form>

        </div>

    </main>

</body>

</html>