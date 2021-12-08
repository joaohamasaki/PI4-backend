<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cadastre suas Informações</title>
</head>

<body>
    @include('layouts.menu')
    <main>
        <div class="container mt-5">
            <h1>Cadastre suas informaçoes!</h1>
            <form method="POST" action="{{route('host.store')}}">
                @csrf
                <div class="row mt-4">
                    <div class="col-12">
                        <input type="text" name="name" class="form-control" placeholder="Nome da empresa">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-10">
                        <input type="text" name="address" class="form-control" placeholder="Endereço">
                    </div>
                    <div class="col">
                        <input type="text" name="number" class="form-control" placeholder="Número">
                    </div>
                    <div class="col-7 mt-3">
                        <input type="text" name="city" class="form-control" placeholder="Cidade">
                    </div>
                    <div class="col mt-3">
                        <input type="text" name="state" class="form-control" placeholder="Estado">
                    </div>
                    <div class="col mt-3">
                        <input type="text" name="code" class="form-control" placeholder="CEP">
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>