<?php

include './config.php';

$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$telpon = $_POST['telpon'];
$tahunmasuk = $_POST['tahunmasuk'];

mysqli_query($koneksi, "insert into sawitprimacoal values('','$nama','$ktp','$telpon','$tahunmasuk')");

include 'index.php';
