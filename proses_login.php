<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

// Cek ke tabel admin
$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) > 0) {
    $_SESSION['admin'] = $username;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Login gagal!'); window.location='login.php';</script>";
}
?>
