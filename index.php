<?php
session_start();
require_once('./routes/routes.php');
require_once('./functions/logged.php');
$page = setPage();
$page_without_login = array('login', '404');
if(!in_array($page, $page_without_login) && !logged()) {
    header("Location: /?p=login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>MAPA - Back End II</title>
</head>
<body>
    <header>
    <?php if($page != 'login' && $page != '404'): ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="?p=alunos">Alunos</a>
                    <a class="nav-link" href="?p=cursos">Cursos</a>
                    <a class="nav-link" href="?p=logout">Sair</a>
                </div>
                </div>
            </div>
        </nav>
    <?php endif; ?>
    </header>

    <main class="container">
        <?php require("./view/$page.php"); ?>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>