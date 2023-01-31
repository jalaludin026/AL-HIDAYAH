<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL-HIDAYAH | INPUT DATA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="container">
        <form action="" class="form mt-3">
            <div class="mb-2">
                <h3 class="text-center">INPUT DATA SISWA</h3>
                <a href="dataSiswa" class="btn btn-secondary">KEMBALI</a>
                <hr>
            </div>
            <div class="mb-3">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="NAMA SISWA" aria-label="Username">
                    <input type="text" class="form-control ms-1" placeholder="NIK SISWA" aria-label="Server">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">TANGGAL LAHIR</label>
                <input type="date" class="form-control">
            </div>
            <div class="mb-3">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="NAMA ORTU" aria-label="Username">
                    <input type="text" class="form-control ms-1" placeholder="NO WHATSHAPP" aria-label="Server">
                </div>
            </div>
            <div class="mb-3">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="NISN SISWA" aria-label="Username">
                    <input type="text" class="form-control ms-1" placeholder="ALAMAT" aria-label="Server">
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <label for="" class="form-label">CITA-CITA</label>
                <label for="" class="form-label ms-1">HOBI</label>
            </div>
            <div class="input-group mb-2">
                <select name="" id="" class="form-select">
                    <option value="POLISI">POLISI</option>
                    <option value="GURU">GURU</option>
                    <option value="DOKTER">DOKTER</option>
                    <option value="TNI">TNI</option>
                    <option value="SENIMAN">SENIMAN</option>
                </select>
                <select name="" id="" class="form-select ms-1">
                    <option value="MELUKIS">MELUKIS</option>
                    <option value="MAIN BOLA">MAIN BOLA</option>
                    <option value="MEMBACA">MEMBACA</option>
                    <option value="MENULIS">MENULIS</option>
                </select>
            </div>
            <div class="d-flex justify-content-around">
                <label for="" class="form-label">JENIS KELAMIN</label>
                <label for="" class="form-label ms-1">KELAS</label>
            </div>
            <div class="input-group mb-2">
                <select name="" id="" class="form-select">
                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                    <option value="PEREMPUAN">PEREMPUAN</option>
                </select>
                <select name="" id="" class="form-select ms-1">
                    <option value="KELAS 1">KELAS 1</option>
                    <option value="KELAS 2">KELAS 2</option>
                    <option value="KELAS 3">KELAS 3</option>
                    <option value="KELAS 4">KELAS 4</option>
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary form-control">SIMPAN DATA</button>
            </div>
    </div>
    </form>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>