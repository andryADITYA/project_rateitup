<?php
session_start();
include '../includes/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username = '$username'";
$result = $koneksi->query($query);

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();

    if (password_verify($password, $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['nama'];
        header("Location: dashboard_admin.php");
        exit();
    }
}

echo "<script>alert('Login gagal!'); window.location='login_admin.html';</script>";
