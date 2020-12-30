<?php
include "koneksi.php";

$nama = $_POST['namaDaftar'];
$email = $_POST['emailDaftar'];
$password = $_POST['passwordDaftar'];


$query = "INSERT INTO user VALUES('$email','$password','$nama')";
$cek = mysqli_query($conn,$query);

if($cek != false){
    echo "<script> alert('Daftar Berhasil!');
    window.location.href = 'index.php';
    </script>";
}
else{
    echo "<script> alert('Daftar Gagal!');
    window.location.href = 'index.php';
    </script>";
}
?>