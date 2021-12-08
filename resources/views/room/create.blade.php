<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastrar Espaço</title>
</head>

<body>
    <main>
        @include('layouts.menu')
        <div class="container mt-5">
            <h1>Cadastre seu Espaço!</h1>
            <form method="POST" action="{{route('room.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mt-5">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Nome do Espaço">
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control" placeholder="Fotos do Espaço">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="date">Escolha uma data</label>
                        <input type="date" name="published_at" class="form-control mt-2">
                    </div>
                    <div class="col-md-6 mt-3">
                        <span class="form-label">Categorias</span>
                        <select class="form-select mt-2" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <textarea class="form-control" name="description" cols="10" rows="5" placeholder="Descrição"></textarea>
                    </div>                  

                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="title">Infraestrutura</label>
                            <div class="form-group" name="adds[]">
                                @foreach($adds as $add)
                                    <input id="infra" type="checkbox" value="{{$add->id}}">{{$add->name}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="number" name="price" min="0.00" max="100000.00" step="0.01" class="form-control" placeholder="Preço">
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