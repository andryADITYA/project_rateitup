<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("Location: login_admin.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin | Rate It Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand">Dashboard Admin</a>
      <span class="text-white">Halo, <?= $_SESSION['admin_name']; ?> | <a href="../logout.php" class="btn btn-light btn-sm">Logout</a></span>
    </div>
  </nav>

  <div class="container mt-4">
    <h3 class="mb-3">Selamat datang, Admin!</h3>
    <a href="moderasi_komentar.php" class="btn btn-primary">Moderasi Komentar</a>
  </div>
</body>
</html>
