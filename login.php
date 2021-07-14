<?php

$user = "admin";
$pass = "admin";

$nama = $_POST['nama'];
$password = $_POST['password'];


if ($nama == $user && $password == $pass) {
    header( "Location./index.php" );
}
else{
    header( "Location:./login.html" );
}

?>