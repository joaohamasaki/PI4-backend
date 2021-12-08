<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Bem Vindo ao Cowork</title>
</head>

<body>
    @include('layouts.menu')
    <main>        
        <div class="container">
            <div class="row">                
                <div class="col-sm mt-4">
                    <h4 class="profile-name">Cadastre suas Informações</h4>
                    <div class="profile-card-1 mt-4">
                        <a href="{{Route('host.create')}}"><img src="//i2.wp.com/www.softsell.com.br/wp-content/uploads/2020/07/ciberseguranca-entenda-como-funciona-e-quais-o-objetivo-dessa-area-20200710165638.jpg.jpg" width="320" height="220" class="img img-responsive"></a>
                    </div>
                </div>
                <div class="col-sm mt-4">
                    <h4 class="profile-name">Cadastre a Categoria</h4>
                    <div class="profile-card-1 mt-4">
                        <a href="{{Route('category.create')}}"><img src="http://www.logoaceleradora.com.br/artigos/wp-content/uploads/2018/08/12-1024x731.jpeg" width="320" height="220" class="img img-responsive"></a>
                    </div>
                </div>
                <div class="col-sm mt-4">
                    <h4 class="profile-name">Cadastre sua Infraestrutura</h4>
                    <div class="profile-card-1 mt-4">
                        <a href="{{Route('add.create')}}"><img src="http://www.portaldaeducativa.ms.gov.br/wp-content/uploads/2020/11/serhs-coworking-730x425-1.jpeg" width="320" height="220" class="img img-responsive"></a>
                    </div>
                </div>
                <div class="col-sm mt-4">
                    <h4 class="profile-name">Cadastre seu Espaço</h4>
                    <div class="profile-card-1 mt-4">
                        <a href="{{Route('room.create')}}"><img src="https://images.coworkingbrasil.org/coworkingbrasi/wp-content/uploads/2019/12/DSCF0167.jpg?cx=center&cy=center&scale.option=fill&w=1088&cw=1088&h=707&ch=707" width="320" height="220" class="img img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>