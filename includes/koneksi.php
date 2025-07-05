<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "rate_it_up";

// Koneksi ke database
$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
