<?php
include 'func.php';

if(!empty($_POST)){
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЗВІТ ЧЕРГОВОМУ</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/libs/bootstrap-5.0.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid mt-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-uppercase " href="#">звіт черговому</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">головна</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bat.php">бат</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vbdr.php">вбдр</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vmaz.php">вмаз</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vromdtp.php">вром дтп</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tor.php">тор</a>
                            </li>

                        </ul>
                        <a  href="admin.php">
                            <button type="button" class=" btn btn-success my-3 my-md-0 ms-md-3">Увійти</button>
                        </a>
                        <!--
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        -->
                    </div>
                </div>
            </nav>
        </div>

        <!-- Forms -->
        <div class="container mt-3 mb-5">
            <div class="row">
             <h5>Шановні колеги!</h5>
            </div>
            <p class="lead">
            Прошу Вас звернути особливу УВАГУ 
            на правильність передачі інформації
             щодо нової статистичної звітності!
            </p>
        </div>

    </div>

    <script src="./assets/libs/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
</body>

</html>