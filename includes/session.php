<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");  // redirect ke halaman login jika belum login
    exit();
}
?>
