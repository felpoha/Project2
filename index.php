<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>Teste</h1>
    </header>


    <main>

    </main>


    <footer>

    </footer>
</body>
</html> -->

<?php

    if (isset($_GET["param"])) {
    $param = $_GET["param"];
    $p = explode("/", $param);
    }

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;

    if ($page == "jogo") {
        $pagina == "jogo/{$jogo}.php";
    } else {
        $pagina = "paginas/{$page}.php";
    }

    if (file_exists($pagina)) {
        include $pagina;
    } else {
        include "paginas/erro.php";
    }