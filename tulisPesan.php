<?php
session_start();

if(!isset($_SESSION['email'])){
    echo "<script> 
    window.location.href = 'index.php';
    </script>";
}

// KIRIM PESAN

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
                <a href="akun.php" class="btn btn-outline-success mb-3">Kotak Masuk</a>
                <a href="terkirim.php" class="btn btn-outline-success mb-3">Terkirim</a>
                <a href="" class="btn btn-success">Tulis Pesan</a>
            </div>

            <div class="col-9 m-3 p-3 main border border-success">
                <form action="enkripsi.php" method="post">
                    <div class="top">
                        <div class="form-group">
                        <label for="emailPenerima">Tujuan E-mail</label>
                        <input type="email" name="emailPenerima" class="form-control" id="emailPenerima">
                        </div>
                        <div class="form-group">
                        <label for="subjectPesan">Subject Pesan</label>
                        <input type="text" name="subjectPesan" class="form-control" id="subjectPesan">
                        </div>
                        <div class="form-group">
                        <label for="isiPesan">Isi Pesan</label>
                        <textarea name="isiPesan" class="form-control" id="isiPesan" cols="50" rows="10"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Kirim Pesan</button>
                        </div>
                    </div>
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