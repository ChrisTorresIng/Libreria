<div class="container-fluid m-0 p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-gradiant-violeta border-bottom border-2 border-dark pb-4 pt-4 m-0">
        <div class="container-fluid">
            <p class="navbar-brand me-lg-4"><i class="fas fa-book-open"></i> MoonRead </p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link icono-abajo" aria-current="page" href=" {{ Route('users.home')}} "><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle icono-abajo text-center" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="far fa-user"></i> Usuario
                        </a>
                        <ul class="dropdown-menu bg-gradiant-violeta" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item icono-abajo" href=" {{ Route('users.perfil')}} "><i class="fas fa-user-circle"></i> perfil</a></li>
                            <li><a class="dropdown-item icono-abajo" href="#"><i class="fab fa-shopify"></i> comprar</a></li>
                            <li><a class="dropdown-item icono-abajo" href="#"><i class="fas fa-chart-bar"></i> Movimiento en linea</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link icono-abajo" href="{{ route('books.index')}}"><i class="fas fa-book"></i> libros</a> 
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle icono-abajo" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-shield"></i> Administrador
                        </a>
                        <ul class="dropdown-menu bg-gradiant-violeta" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item icono-abajo" href="{{ route('empleados.index')}} "><i class="fas fa-user-tie"></i> Empleados</a></li>
                            <li><a class="dropdown-item icono-abajo" href=" {{ route('usuarios.index')}} "><i class="fas fa-users"></i> Usuarios</a></li>
                            <li><a class="dropdown-item icono-abajo" href="{{ route('books.inventario')}}"><i class="fas fa-list"></i> Inventario</a></li>
                            <li><a class="dropdown-item icono-abajo" href="#"><i class="fas fa-dolly-flatbed"></i> Ventas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link icono-abajo" href=" {{ Route('users.logout') }}"><i class="fas fa-door-open"></i> cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
