<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('motos')}}">Motos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('carros')}}">Carros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('users')}}">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('produtos')}}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>