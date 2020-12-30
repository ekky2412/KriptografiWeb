<?php
    include "caesarcipher.php";
    include "libraryAES.php";

    $emailPenerima = "ekky.raharjo@gmail.com"; 
    // $_POST['emailPenerima'];
    $subjectPesan = "Oke";
    // $_POST['subjectPesan'];
    $isiPesan = "Nasi Balap";
    // $_POST['isiPesan'];

    $geser = 100%26;
    echo $geser;
    //ENKRIPSI
    $kunci = "ProgramRezkyPutr";// key
    $aes = new Aes($kunci);  //Aes(kunci)
    $isi = $aes->encrypt(Encipher($isiPesan,$geser));

    echo "$emailPenerima,$subjectPesan,".$isi." beda ";
    
    // DEKRIPSI
    $isi = $aes->decrypt($isi);
    echo Decipher($isi,$geser);
?>
