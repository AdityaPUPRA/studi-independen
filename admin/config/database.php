<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "phpdasar";

$db = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
} else {
    echo "Terhubung ke database";
}