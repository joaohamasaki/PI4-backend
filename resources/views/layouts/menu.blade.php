<header>
    <div class="container">
        <img id="logo" src="/img/cowork2.png" alt="">
    </div>
    <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="{{route ('dashboard')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route ('host.index')}}">Usuário</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route ('room.index')}}">Espaços</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuCategoria" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-expanded="false">
                    Categorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuCategoria">
                    @foreach(\App\Models\Category::all() as $category)
                        <a class="dropdown-item" href="#">{{$category->name}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuCategoria" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-expanded="false">
                    Infraestrutura
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuCategoria">
                    @foreach(\App\Models\Add::all() as $add)
                        <a class="dropdown-item" href="#">{{$add->name}}</a>
                    @endforeach
                </div>
            </li>            
            <li class="nav-item"><a class="nav-link" href="{{route ('room.trash')}}">Espaços Apagados</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Historico</a></li>
        </ul>
</header>