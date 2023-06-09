<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="home.php">Beranda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="inventaris.php">Daftar Inventaris</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            List per Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="inventaris.php?cari=bangunan">Bangunan</a></li>
                <li><a class="dropdown-item" href="inventaris.php?cari=kendaraan">Kendaraan</a></li>
                <li><a class="dropdown-item" href="inventaris.php?cari=alat tulis">Alat Tulis</a></li>
                <li> <a class="dropdown-item" href="inventaris.php?cari=elektronik">Elektronik</a></li>
            </ul>
            </li>
            
        </ul>
        </div>
    </div>

    <div class="logout">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
    </div>
</nav>