<?php
include 'includes/session.php'; // Cek login user
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | Rate It Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">Rate It Up</a>
      <div class="ms-auto">
        <span class="text-white me-3">Halo, <?= $_SESSION['nama']; ?>!</span>
        <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Konten Utama -->
  <div class="container mt-5">
    <div class="text-center mb-4">
      <h2>Selamat Datang di Dashboard</h2>
      <p>Silakan menulis review kuliner atau lihat review dari pengguna lain.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <a href="tambah_review.php" class="btn btn-success w-100 p-3">📝 Tambah Review Kuliner</a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="list_review.php" class="btn btn-primary w-100 p-3">📖 Lihat Semua Review</a>
      </div>
    </div>
  </div>

</body>
</html>
