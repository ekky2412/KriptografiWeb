<?php
    $conn=mysqli_connect("localhost","root","","projekkripto");
	if ($conn->connect_error) {
		die('koneksi gagal : '.$koneksi->connect_error);
	}
?>