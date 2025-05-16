<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM peserta");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <h2>Daftar Peserta Event</h2>
    <a href="logout.php">Logout</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th><th>Nama</th><th>Email</th><th>Minat Buku</th>
        </tr>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['minat']; ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
