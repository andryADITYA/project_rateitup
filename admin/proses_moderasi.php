<?php
session_start();
include '../includes/koneksi.php';

$id   = $_POST['id'];
$aksi = $_POST['aksi'];

if ($aksi == 'approve') {
    $status = 'approved';
} elseif ($aksi == 'reject') {
    $status = 'rejected';
} else {
    die("Aksi tidak valid.");
}

$update = $koneksi->query("UPDATE komentar SET status = '$status' WHERE id = $id");

if ($update) {
    header("Location: moderasi_komentar.php");
} else {
    echo "Gagal memproses moderasi.";
}
