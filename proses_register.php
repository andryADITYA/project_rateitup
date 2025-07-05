<?php
include 'includes/koneksi.php';

// Ambil data dari form
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = $_POST['password'];

// Enkripsi password
$hash_password = password_hash($password, PASSWORD_DEFAULT);

// Cek apakah email sudah digunakan
$cek = $koneksi->query("SELECT * FROM user WHERE email = '$email'");
if ($cek->num_rows > 0) {
    echo "<script>alert('Email sudah terdaftar!'); window.location='register.html';</script>";
    exit;
}

// Simpan ke database
$sql = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$hash_password')";
if ($koneksi->query($sql)) {
    echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='login.html';</script>";
} else {
    echo "Gagal menyimpan data: " . $koneksi->error;
}
?>
