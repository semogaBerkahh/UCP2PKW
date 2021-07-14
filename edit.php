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

            $sawitprimacoal = mysqli_query($koneksi, "select*from sawitprimacoal where id='$id'");
            while($data = mysqli_fetch_assoc($sawitprimacoal)){
                ?>
                <div class = "container mt-5">
                    <p><a href="index.php">Home</a> / Edit Karyawan / <?php echo $data['nama'] ?><p>
                    <div class = "card">
                        <div class ="card-header">
                            <p class="fw-blod">Profil Karyawan</p>
                        </div>
                        <div class=" card-body fw-bold">
                            <form method="post" action="update.php">
                                <div class ="mb-3">
                                    <input type="hidden" class="form-control" name='id' value="<?php echo $data['id']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="txt" class="form-control" id="nama" placeholder="Masukan Nama Karyawan" name="nama" value="<?php echo $data['nama']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="KTP" class="form-label">No. KTP</label>
                                    <input type="txt" class="form-control" id="KTP" placeholder="Masukan No. KTP Karyawan" name="ktp" value="<?php echo $data['ktp']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="telpon" class="form-label">No. Telepon</label>
                                    <input type="txt" class="form-control" id="telpon" placeholder="Masukan No. Telepon Karyawan" name="telpon" value="<?php echo $data['telpon']; ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="tahunmasuk" class="form-label">Tahun Masuk</label>
                                    <input type="txt" class="form-control" id="tahunmasuk" placeholder="Masukan Tahun Masuk Karyawan" name="tahunmasuk" value="<?php echo $data['tahunmasuk']; ?>">
                                </div>
                                <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                            </form>
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