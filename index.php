<?php
session_start();

if (isset($_SESSION['ra'])) {
    if ($_SESSION['ra'] == 'RA200346805') {
        header("location: http://localhost/RA200346805/view/alunos.php");
        exit;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sistema escolar</title>



    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">


</head>

<body class="text-center container d-flex align-items-center justify-content-center" style="height:100vh;">
    <form class="form-signin" style="width:30%" action="./controllers/login.php" method="POST">

        <h1 class="h3 mb-3 font-weight-normal">Login</h1>

        <label for="number-ra" class="sr-only">RA</label>
        <input name="number-ra" type="text" id="number-ra" class="form-control" placeholder="RA200346805" required autofocus>

        <label for="password" class="sr-only">Senha</label>
        <input name="password" type="password" id="password" class="mt-3 form-control" placeholder="kaique" required>

        <button class="mt-4 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    </form>
</body>

</html>