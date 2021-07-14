<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <title>PT Sawit Bahagia</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Navbar -->

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


    <div class="container data-mahasiswa mt-5">
        <h2 class="text-center mb-5"> Data Karyawan PT Sawit Bahagia</h2>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
            Tambah Data
        </button>
        <!-- Modal -->
        <div class="modal fade " id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <form method="post" action="store.php" name="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Data Karyawan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="txt" class="form-control" id="nama" placeholder="Masukan Nama Karyawan" name="nama" required>
                            </div>

                            <div class="mb-3">
                                    <label for="KTP" class="form-label">No. KTP</label>
                                    <input type="txt" class="form-control" id="ktp" placeholder="Masukan No. KTP Karyawan" name="ktp" required>
                            </div>

                            <div class="mb-3">
                                    <label for="telpon" class="form-label">No. Telepon</label>
                                    <input type="txt" class="form-control" id="telpon" placeholder="Masukan No. Telepon Karyawan" name="telpon" required>
                            </div>

                            <div class="mb-3">
                                <label for="tahunmasuk" class="form-label">Tahun Masuk</label>
                                <input type="txt" class="form-control" id="tahunmasuk" placeholder="Masukan Tahun Masuk Karyawan" name="tahunmasuk" required>
                            </div>

                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="table-responsive-md mb-5">
            <table class="table table-striped" id="tabelKaryawan">
                <thead>
                    <tr>
                        <th class="col"> No.</th>
                        <th scope="col"> Nama</th>
                        <th scope="col"> No. KTP</th>
                        <th scope="col"> No. Telepon</th>
                        <th scope="col"> Tahun Masuk</th>
                        <th scope="col"> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'config.php';

                    $no = 1;

                    $sawitprimacoal = mysqli_query($koneksi, "select*from sawitprimacoal");

                    
                    while($data = mysqli_fetch_array($sawitprimacoal)){
                        ?>

                        <tr>
                        <td><?php echo $no++; ?></td>

                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['ktp']; ?></td>
                        <td><?php echo $data['telpon']; ?></td>
                        <td><?php echo $data['tahunmasuk']; ?></td>
                        

                        <td>
                        <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">Lihat <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </a>

                        <!-- <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a> -->

                        <!-- <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Akan Menghapus Data Mahasiswa Ini?')">HAPUS</a> -->
                        </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer p-1">
        <div class="container text-center">
            <p>All right reserved | Muhammad Fajri Yosri | 20190140067</p>
        </div>
    </div>



    <script src ="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tabelKaryawan').DataTable();
    } );
    </script>
</body>

</html>