<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL HIDAYAH | DATA SISWA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
    html body {
        background-color: skyblue;
    }

    .table {
        width: 100%;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
    }
    </style>
</head>

<body>


    <div class="container">
        <div class="mt-2">
            <div class="d-flex justify-content-around">
                <a href="inputDataSiswa" class="btn btn-primary">TAMBAH DATA</a>
                <a href="index" class="btn btn-secondary">KEMBALI</a>
            </div>
            <h1 class="text-center">DATA SISWA</h1>
            <form action="" class="d-flex" style="width: 300px;">
                <input type="text" class="form-control" placeholder="CARI SISWA">
                <button class="btn btn-light">CARI</button>
            </form>
            <hr>

            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th>OPSI</th>
                </tr>
            </table>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>