<?php
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Redirect ke halaman utama (index atau login)
header("Location: index.html");
exit();
