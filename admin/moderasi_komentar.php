<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
  header("Location: login_admin.html");
  exit();
}

include '../includes/koneksi.php';

$komentar = $koneksi->query("SELECT k.*, u.nama, r.tempat FROM komentar k 
                              JOIN user u ON k.user_id = u.id 
                              JOIN review r ON k.review_id = r.id 
                              WHERE k.status = 'pending'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Moderasi Komentar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h3 class="mb-4">Moderasi Komentar</h3>

  <?php while ($row = $komentar->fetch_assoc()): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h5><?= $row['tempat']; ?> - oleh <?= $row['nama']; ?></h5>
        <p><?= $row['komentar']; ?></p>
        <form action="proses_moderasi.php" method="post" class="d-flex gap-2">
          <input type="hidden" name="id" value="<?= $row['id']; ?>">
          <button name="aksi" value="approve" class="btn btn-success btn-sm">Setujui</button>
          <button name="aksi" value="reject" class="btn btn-danger btn-sm">Tolak</button>
        </form>
      </div>
    </div>
  <?php endwhile; ?>
</div>
</body>
</html>
