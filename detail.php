<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>PT Sawit Bahagia</title>
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Data Karyawan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class= "nav-link active" arria-current="page" href="index.php">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class= "nav-link active" arria-current="page" href="login.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <?php
            include 'config.php';

            $id = $_GET['id'];

            $sawitprimacoal= mysqli_query($koneksi, "select*from sawitprimacoal where id='$id'");
            while($data = mysqli_fetch_assoc($sawitprimacoal)){
            ?>
                <div class = "container mt-5">
                    <p><a href="index.php">Home</a> / Detail Karyawan / <?php echo $data['nama'] ?><p>
                    <div class = "card">
                        <div class ="card-header">
                            <p class="fw-blod">Profil Karyawan</p>
                        </div>
                        <div class="card-body fw-bold">
                            <p>Nama : <?php echo $data['nama'] ?></p>
                            <p>No. KTP : <?php echo $data['ktp'] ?></p>
                            <p>No. Telepon : <?php echo $data['telpon']?></p>
                            <p>Tahun Masuk : <?php echo $data['tahunmasuk'] ?></p>
                            <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm">CETAK</a>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
                            <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Akan Menghapus Data Mahasiswa Ini?')">HAPUS</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
            <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>