<?php
session_start();
include 'koneksi.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['login'] = true;
    $_SESSION['user'] = mysqli_fetch_assoc($result);
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Username atau password salah!'); window.location='login.php';</script>";
}
?>
