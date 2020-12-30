<?php
session_start();
    include "caesarcipher.php";
    include "libraryAES.php";
    include "koneksi.php";

    $emailPenerima = $_POST['emailPenerima'];
    $emailPengirim = $_SESSION['email'];
    $subjectPesan = $_POST['subjectPesan'];
    $isiPesan = $_POST['isiPesan'];

    // echo "$emailPenerima dan $emailPengirim dan $subjectPesan dan $isiPesan <br>";

    $query = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'projekkripto' AND TABLE_NAME = 'pesan'";
    $hasil = mysqli_query($conn,$query);
    $hasil = mysqli_fetch_assoc($hasil);
    $kuncigeser = $hasil['AUTO_INCREMENT'] % 26;
    $panjangkunci = strlen($emailPenerima);
    // echo $kuncigeser;

    if($panjangkunci > 16){
        $kunci_aes = substr($emailPenerima,0,16);
        }
        else{
            $kunci_aes = $emailPenerima;
            for ($i=0; $i < 16-$panjangkunci; $i++) { 
                $kunci_aes .= "z";
            }
            // echo $kunci_aes;
        }
    
    $aes = new Aes($kunci_aes);
    $isiPesan = Encipher($isiPesan,$kuncigeser);
    // echo $isiPesan."<br>";
    $isiPesan = $aes->encrypt($isiPesan);
    // echo $isiPesan."<br>";
    $query2 = "INSERT INTO pesan VALUES ('','$emailPengirim','$emailPenerima','$subjectPesan','$isiPesan', CURRENT_TIME())";
    $cek = mysqli_query($conn,$query2);

    if($cek != false){
        echo "<script> alert('Kirim Email Berhasil!');
        window.location.href = 'akun.php';
        </script>";
    }
    else{
        echo "<script> alert('Kirim Email Gagal! Mohon Cek Kembali Nama Pengirim Email!');
        window.location.href = 'akun.php';
        </script>";
    }


    
?>