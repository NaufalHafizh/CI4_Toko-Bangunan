<nav style="background-color: #61B15A;" class="navbar navbar-expand-lg fs-6 navbar-dark">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="#">Toko Bangunan <span class="">Makmur Jaya</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><?= session()->get('username') ?></a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>