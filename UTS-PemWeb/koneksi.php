<?php
// host web server
$host = 'localhost';
// username untuk mengakses database
$username = 'root';
// password untuk mengakses database
$pass = '';
// database yang digunakan
$database = 'tebakan';
// script untuk koneksi ke database
$koneksi = mysqli_connect($host,$username,$pass,$database);

// Fungsi tambah data ke tabel pemain
function addPemain($nama, $email, $score){
    $sql = "INSERT INTO tebak_angka (nama, email, score) VALUES('".$nama."','".$email."','".$score."')";
    if (mysqli_query($GLOBALS['koneksi'], $sql)) {
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS['koneksi']);
      }
    mysqli_close($GLOBALS['koneksi']);
}
?> 