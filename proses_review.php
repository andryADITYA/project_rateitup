<?php
session_start();
include 'includes/koneksi.php';

// Ambil data dari form
$user_id = $_SESSION['user_id'];
$tempat  = $_POST['tempat'];
$review  = $_POST['review'];
$rating  = $_POST['rating'];

// Simpan ke database
$sql = "INSERT INTO review (user_id, tempat, review, rating) 
        VALUES ('$user_id', '$tempat', '$review', '$rating')";

if ($koneksi->query($sql)) {
    echo "<script>alert('Review berhasil disimpan!'); window.location='dashboard.php';</script>";
} else {
    echo "Gagal menyimpan review: " . $koneksi->error;
}
?>
