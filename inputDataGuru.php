<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL-HIDAYAH | INPUT DATA GURU</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="container">
        <form action="" class="form mt-3">
            <div class="mb-2">
                <h3 class="text-center">INPUT DATA GURU</h3>
                <a href="dataGuru" class="btn btn-secondary">KEMBALI</a>
                <hr>
            </div>
            <div class="mb-3">
                <div class="input-group mb-2">
                    <input type="text" required class="form-control" placeholder="NAMA GURU" aria-label="Username">
                    <input type="number" class="form-control ms-1" required placeholder="NO SK GURU"
                        aria-label="Server">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">TANGGAL LAHIR</label>
                <input type="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">PENDIDIKAN TERAKHIR</label>
                <select name="" id="" class="form-select" required>
                    <option value="SD/SEDERAJAT">SD/SEDERAJAT</option>
                    <option value="SLTP">SLTP</option>
                    <option value="SLTA">SLTA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NO REKENING (BCB)</label>
                <input type="number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NPWP (OPSIONAL)</label>
                <input type="number" class="form-control">
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