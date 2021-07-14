<?php

include './config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$telpon = $_POST['telpon'];
$tahunmasuk = $_POST['tahunmasuk'];

mysqli_query($koneksi, "update sawitprimacoal set nama='$nama', ktp = '$ktp', telpon = '$telpon', tahunmasuk ='$tahunmasuk' where id ='$id'");

header("location:index.php");
