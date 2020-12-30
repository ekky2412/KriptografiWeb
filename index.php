<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-2">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <form action="login.php" method="POST">
                    <div class="mb-2 text-center">
                        <h1>Login</h1>
                    </div>
                    <div class="mb-3">
                        <label for="emailLogin" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailLogin" placeholder="E-mail" name="emailLogin">
                    </div>
                    <div class="mb-3">
                        <label for="passwordLogin" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" placeholder="Password" name="passwordLogin">
                    </div>
                    <div class="mb-2 text-center">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <form action="daftar.php" method="POST">
                    <h2>Belum punya akun? Daftar sekarang</h2>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="emailDaftar" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailDaftar" placeholder="E-mail" name="emailDaftar">
                            </div>
                            <div class="mb-3">
                                <label for="passwordDaftar" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordDaftar" placeholder="Password" name="passwordDaftar">
                            </div>
                            <div class="mb-3">
                                <label for="namaDaftar" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namaDaftar" placeholder="Nama Lengkap" name="namaDaftar">
                            </div>
                            <div class="mb-2 text-center">
                                <button class="btn btn-warning" type="submit">Daftar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>