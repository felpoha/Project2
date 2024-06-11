<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/6578787cbc.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="z-index: 1 !important">
            <div class="container-fluid">
                <a class="navbar-brand d-flex" href="#">
                    <img src="imagens/logoGameHubVerm.png" style="width: 65px;" alt="GameHub">
                    <p class="d-none d-md-block" style="color: #DB3A34;">Game</p>
                    <p class="d-none d-md-block">Hub</p>
                </a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0 text-center" id="navbarNav">
                    <ul class="navbar-nav position-relative"">
                        <li class=" nav-item">
                        <a class="nav-link text-white" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link modal-title text-white" href="#">EQUIPE</a>
                        </li>
                        <li class="nav-item">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa-solid fa-message"></i>
                                CONTATO
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-bs-theme="dark">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">ENTRE EM CONTATO!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label text-white">Nome completo:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="&#xf007 Digite seu nome" style="font-family: 'Poppins','FontAwesome'">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label text-white">E-mail:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="&#xf0e0 exemplo@exem.com" style="font-family: 'Poppins','FontAwesome'">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label text-white">Mensagem:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                    <button type="button" class="btn btn-danger">ENVIAR</button>
                </div>
            </div>
        </div>
    </div>

    <main>

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
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <footer>
        <div class="footer text-center p-3">
            <a href="#">
                <img src="imagens/LogoGameHubBranca.png" alt="GameHub">
            </a>
            <h4 class="fs-6 text-white p-2">Alana Kovalski de Angeli ©</h4>
        </div>
    </footer>
</body>

</html>