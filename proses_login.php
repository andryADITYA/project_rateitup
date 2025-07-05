<?php
session_start();
include 'includes/koneksi.php';

// Ambil data dari form login
$email    = $_POST['email'];
$password = $_POST['password'];

// Cek apakah email terdaftar
$query  = "SELECT * FROM user WHERE email = '$email'";
$result = $koneksi->query($query);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Login berhasil → simpan data user di session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nama']    = $user['nama'];

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Password salah!'); window.location='login.html';</script>";
    }
} else {
    echo "<script>alert('Email tidak terdaftar!'); window.location='login.html';</script>";
}
?>
