<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bandara</title>
    <style>
        body {
            background: url(./Pswt.jpg) no-repeat center fixed;
            -webkit-background-size:cover;
        }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-4 fw-bold" href="#">BANDARA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link"></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Jadwal
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="jadwal.php">Isi data</a></li>
                    <li><a class="dropdown-item" href="tambah (jadwal).php">Tambah data</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Penumpang
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="penumpang.php">Isi data</a></li>
                    <li><a class="dropdown-item" href="tambah (penumpang).php">Tambah data</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pesawat
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="pesawat.php">Isi data</a></li>
                    <li><a class="dropdown-item" href="tambah (pesawat).php">Tambah data</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tiket
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="tiket.php">Isi data</a></li>
                    <li><a class="dropdown-item" href="tambah (tiket).php">Tambah data</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tujuan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="tujuan.php">Isi data</a></li>
                    <li><a class="dropdown-item" href="tambah (tujuan).php">Tambah data</a></li>
                </ul>
                </li>
            </ul>
            <form method="post" class="d-flex">
                <input type="text" name="keyword" class="form-control me-2 btn-sm" placeholder="Silahkan cari disini . . . . ." autocomplete="off" size="40" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="cari">Cari</button>
            </form>
            </div>
        </div>
        </nav>
    </header>

    <!-- Page content-->
    <div class="container">
        <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        </div>
        <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        </div>
        <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        </div>
        <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        </div>
        <div>
            <figure class="text-left">
                <blockquote class="blockquote">
                    <h4>Selamat Datang di Web Database Bandara Kami.</h4>
                            <p>Silahkan memulai dengan memilih tabel <br> yang tersedia di bagian atas.</p>
                </blockquote>
            </figure>
        </div>
        <div>
            <a tabindex="0" class="btn btn-lg btn-outline-dark text-center" role="button">Get Started</a>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="assets/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Core theme JS <script src="assets/js/scripts.js"></script>-->
</body>
</html>