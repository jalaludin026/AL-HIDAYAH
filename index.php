<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL - HIDAYAH</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-info">


    <div class="container">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-white shadow" style="border-radius: 10px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AL HIDAYAH</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                OPSI
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="dataSiswa">DATA SISWA</a></li>
                                <li><a class="dropdown-item" href="dataGuru">DATA GURU</a></li>
                                <li><a class="dropdown-item" href="#">DATA MADRASAH</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="#">KELUAR</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>


        <!-- welcome -->
        <div class="welcome p-3">
            <h1 class="text-center">SELAMAT DATANG ADMIN </h1>
        </div>

        <!-- card -->
        <div class="row d-flex justify-content-around mt-3">
            <div class="card mb-3" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">DATA SISWA</h5>
                    <h6 class="card-subtitle mb-2 text-muted">0</h6>
                    <a href="#" class="card-link">LIHAT</a>
                </div>
            </div>

            <div class="card mb-3" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">DATA GURU</h5>
                    <h6 class="card-subtitle mb-2 text-muted">0</h6>
                    <a href="#" class="card-link">LIHAT</a>
                </div>
            </div>

            <div class="card mb-3" style="width: 16rem;">
                <div class="card-body">
                    <h5 class="card-title">DATA MADRASAH</h5>
                    <h6 class="card-subtitle mb-2 text-muted">0</h6>
                    <a href="#" class="card-link">LIHAT</a>
                </div>
            </div>
        </div>

    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>