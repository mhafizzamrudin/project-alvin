<?php
// host web server
$host       =   "localhost";
// username untuk mengakses database
$username   =   "root";
// password untuk mengakses database
$pass       = "";
// database yang digunakan
$database   = "data_tables";
// script untuk koneksi ke database
$koneksi = mysqli_connect($host,$username,$pass,$database);
?>