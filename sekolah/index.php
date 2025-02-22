<?php
session_start();
include 'database.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sekolah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Admin Sekolah</h2>
            <!-- Tombol Logout -->
            <a href="logout.php" class="btn btn-danger">🚪 Logout</a>
        </div>
        <hr>
        <div class="list-group">
            <a href="guru.php" class="list-group-item list-group-item-action">📚 Manajemen Guru & Staf</a>
            <a href="pesan.php" class="list-group-item list-group-item-action">✉️ Pesan Komentar</a>
        </div>
    </div>
</body>

</html>