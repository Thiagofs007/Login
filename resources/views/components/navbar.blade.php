<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto"> <!-- Usando 'mx-auto' para centralizar os itens -->
            <li class="nav-item">
                <a href="inicial.blade.php" class="nav-link"><i class="fas fa-home"></i> Início</a>
            </li>
            <li class="nav-item">
                <a href="calendar.blade.php" class="nav-link"><i class="fas fa-calendar"></i> Calendário</a>
            </li>
            <li class="nav-item">
                <a href="sobre.blade.php" class="nav-link"><i class="fas fa-info-circle"></i> Sobre</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="login.blade.php" class="btn btn-custom"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
            <li class="nav-item">
                <a href="entrar2.blade.php" class="btn btn-custom"><i class="fas fa-user-plus"></i> Cadastrar</a>
            </li>
        </ul>
    </div>
</nav>
