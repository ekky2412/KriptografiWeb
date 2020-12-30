<?php
    include "koneksi.php";
    include "prosesaes.php";
	
	$plainteks = $_POST['plainteks'];
        $kunci = "ProgramRezkyPutr";// key
	$aes = new Aes($kunci);  //Aes(kunci)
	$enkrip=$aes->encrypt($plainteks);
    echo "\n\n Hasil Enkrip:\n" .($enkrip) . "\n";
    if(isset($_POST["tombol"])){
    $query = "INSERT INTO pesan VALUES('','1','2','$enkrip','$kunci')";
    $cek = mysqli_query($conn,$query);
    }
	$decrypted = $aes->decrypt($enkrip);

	echo "\n\n Hasil Dekrip:\n". stripslashes($decrypted)."\n";
?>
