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
            <h1>Edite seu Espaço!</h1>
            <form method="POST" action="{{route('room.update', $room->id)}}">
                @csrf
                @method('PATCH')
                <div class="row mt-5">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" value="{{$room->name}}">
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control" placeholder="Fotos do Espaço">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <input type="date" name="published_at" class="form-control" value="{{ date('d-m-Y', strtotime($room->published_at)) }}">
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{$category->id}} " @if($category->id == $room->category_id) selected @endif>
                                {{$category->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control mt-3" name="description" cols="10" rows="5">{{$room->description}}</textarea>
                    </div>
                    <div class="col-md-6 mt-3">
                        <span class="form-label">Infraestrutura</span>
                        <select class="form-select mt-2" name="adds[]" multiple>
                            @foreach($adds as $add)
                            <option value="{{$add->id}}">
                                {{$add->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mt-3">
                        <input type="number" name="price" min="0.00" max="100000.00" step="0.01" class="form-control" value="{{$room->price}}">
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