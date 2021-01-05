<?php
    session_start();
    include "caesarcipher.php";
    include "libraryAES.php";
    include "koneksi.php";

    $id = $_GET['id'];
    $emailPenerima = $_SESSION['email'];
    $query = "SELECT * FROM pesan WHERE id_pesan = '$id'";
    $hasil = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($hasil);
    $panjang_kunci = strlen($emailPenerima);
    $kunci_geser = $data['id_pesan'] % 26;

    if($panjang_kunci > 16){
    $kunci_aes = substr($emailPenerima,0,16);
    }
    else{
        $kunci_aes = $emailPenerima;
        for ($i=0; $i < 16-strlen($emailPenerima); $i++) { 
            $kunci_aes .= "z";
        }
        // echo $kunci_aes;
    }
    $aes = new Aes($kunci_aes);
    $isiPesan = $data['pesan'];
    $isiPesan = $aes->decrypt($isiPesan);
    echo Decipher($isiPesan,$kunci_geser);
?>