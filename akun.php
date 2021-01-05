<?php
session_start();

if (!isset($_SESSION['email'])) {
    echo "<script> 
    window.location.href = 'index.php';
    </script>";
}

include "koneksi.php";
$query = "SELECT * FROM pesan WHERE email_penerima = '" . $_SESSION['email'] . "'";
$data = mysqli_query($conn, $query);

// QUERY SELECT PESAN WHERE EMAIL penerima = 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kirim Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>
    <div class="body container">
    <div class="row">
            <div class="col-2 my-3 p-3 sidebar border border-success">
                <a href="akun.php" class="btn btn-success mb-3">Kotak Masuk</a>
                <a href="terkirim.php" class="btn btn-outline-success mb-3">Terkirim</a>
                <a href="tulisPesan.php" class="btn btn-outline-success">Tulis Pesan</a>
            </div>

            <div class="col-9 m-3 p-3 main border border-success">
                <form action="akun.php" method="get">
                    <?php
                    if (!isset($_GET['id'])) {
                        while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                            <div class="border p-2">
                                <div class="row">
                                    <a class="btn btn-outline-dark" href="akun.php?id=<?= $row['id_pesan'] ?>"><b> From : <?= $row['email_pengirim'] ?> </b> Subject :  <?=$row['subject'] ?> <a>
                                </div>
                                
                            </div>
                        <?php
                        }
                    } else {
                        $query2 = "SELECT * FROM pesan WHERE id_pesan = '" . $_GET['id'] . "'";
                        $data2 = mysqli_query($conn, $query2);
                        $row = mysqli_fetch_assoc($data2);
                        ?>
                            <div class="form-group">
                                <label for="emailPenerima">Asal E-mail</label>
                                <input type="email" name="emailPenerima" class="form-control" id="emailPenerima" value="<?= $row['email_penerima'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="subjectPesan">Subject Pesan</label>
                                <input type="text" name="subjectPesan" class="form-control" value="<?= $row['subject'] ?>" id="subjectPesan" readonly>
                            </div>
                            <div class="form-group">
                                <label for="isiPesan">Isi Pesan</label>
                                <textarea name="isiPesan" class="form-control" id="isiPesan" cols="50" rows="10" readonly><?= $row['pesan'] ?> </textarea>
                            </div>
                            <div class="form-group mt-2">
                                <a target="_blank" href="dekripsi.php?id=<?=$_GET['id'] ?>" class="btn btn-warning">Dekripsi Pesan</a>
                            </div>
                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container row">
            <div class="col-8 text-center">
                <form action="logout.php">
                    <button class="btn btn-danger">Log Out</button>
                </form>
            </div>
        </div>
    </footer>
</body>

</html>