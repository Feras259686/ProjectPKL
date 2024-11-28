<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "oim";

$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("" . mysqli_connect_error());
} else {
   echo ("Koneksi Berhasil");
}
?>