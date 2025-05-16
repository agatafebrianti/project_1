<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$minat = $_POST['minat'];

$query = "INSERT INTO peserta (nama, email, minat) VALUES ('$nama', '$email', '$minat')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Gagal daftar. Pesan error: " . mysqli_error($conn);
}
?>
