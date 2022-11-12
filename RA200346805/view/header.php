<?php
    include_once './config.php';
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema escolar</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item active">
                        <a class="nav-link" href="./alunos.php">Alunos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./cursos.php">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../controllers/deslogar.php">Sair</a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>