<?php
include 'includes/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Review Kuliner | Rate It Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container my-5">
    <h2 class="mb-4 text-center">📖 Daftar Review Kuliner</h2>

    <?php
    $sql = "SELECT r.*, u.nama FROM review r 
            JOIN user u ON r.user_id = u.id 
            ORDER BY r.waktu DESC";

    $result = $koneksi->query($sql);
    if ($result->num_rows > 0):
      while ($row = $result->fetch_assoc()):
        $rating = intval($row['rating']);
        $bintang = str_repeat("★", $rating) . str_repeat("☆", 5 - $rating);
    ?>
      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($row['tempat']) ?></h5>
          <p class="card-text"><?= nl2br(htmlspecialchars($row['review'])) ?></p>
          <p class="mb-1">Rating:
            <span style="color: orange; font-size: 1.2em;"><?= $bintang ?></span>
          </p>
          <small class="text-muted">Ditulis oleh: <?= htmlspecialchars($row['nama']) ?> | <?= $row['waktu'] ?></small>
        </div>
      </div>
    <?php endwhile; else: ?>
      <p class="text-center">Belum ada review tersedia.</p>
    <?php endif; ?>
  </div>

</body>
</html>
