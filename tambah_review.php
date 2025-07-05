<?php
include 'includes/session.php'; // validasi login user
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Review | Rate It Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="col-md-8 mx-auto bg-white p-4 rounded shadow">
      <h3 class="mb-4">📝 Tambah Review Kuliner</h3>
      <form action="proses_review.php" method="POST">
        <div class="mb-3">
          <label for="tempat" class="form-label">Nama Tempat Kuliner</label>
          <input type="text" class="form-control" id="tempat" name="tempat" required>
        </div>
        <div class="mb-3">
          <label for="review" class="form-label">Ulasan / Review</label>
          <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
        </div>
        <div class="mb-3">
          <label for="rating" class="form-label">Rating Bintang</label>
          <select name="rating" class="form-select" required>
            <option value="5">★★★★★ (5)</option>
            <option value="4">★★★★☆ (4)</option>
            <option value="3">★★★☆☆ (3)</option>
            <option value="2">★★☆☆☆ (2)</option>
            <option value="1">★☆☆☆☆ (1)</option>
          </select>
        </div>
        <button type="submit" class="btn btn-danger">Simpan Review</button>
        <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>

</body>
</html>
