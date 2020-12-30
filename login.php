<?php
session_start();
include "koneksi.php";

$email = $_POST['emailLogin'];
$password = $_POST['passwordLogin'];


$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$cek = mysqli_query($conn,$query);

if($cek != false){
    $_SESSION["email"] = $email;
    echo "<script> alert('Login Berhasil!');
    window.location.href = 'akun.php';
    </script>";
}
else{
    echo "<script> alert('Login Gagal! Email atau password salah!');
    window.location.href = 'index.php';
    </script>";
}
?>