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
                                <a class="nav-link" aria-current="page" href="#">головна</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">бат</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">вбдр</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">вмаз</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">вром дтп</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">тор</a>
                            </li>

                        </ul>
                        <a href="index.php">
                            <button type="button" class=" btn btn-success my-3 my-md-0 ms-md-3">Вийти</button>
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

        <div class="container mt-3 mb-5 overflow-auto">
            <table class="table table-bordered border-black-50 table-hover text-center">
                <thead>
                    <tr>
                        <th rowspan="3" scope="col">Дата</th>
                        <th rowspan="3" scope="col">Бат</th>
                        <th rowspan="3" scope="col">Зміна</th>
                        <th colspan="10" scope="col">Нових правил перевезення</th>
                    </tr>    
                    <tr>
                        <th colspan="5" scope="col">На автотранспорті</th>
                        <th colspan="2" scope="col">На залізничному транспорті</th>
                    </tr>   
                    <tr>
                        <th scope="col">Задокументовано фактів для складання протоколів</th>
                        <th scope="col"">Назва та місце реєстрації перевізника</th>
                        <th scope="col">Проведено перевірок (т/з, які здійснюють міжобласні перевезення)</th>
                        <th scope="col">Складено протоколів</th>
                        <th scope="col">Кількість субєктів господарювання які відмовились виконувати зобовязання щодо перевезення</th>
                        <th scope="col">Проведено перевірок</th>
                        <th scope="col">Складено протоколів</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>28.10.2021</td>
                        <td>1</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>28.10.2021</td>
                        <td>2</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>27.10.2021</td>
                        <td>3</td>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>27.10.2021</td>
                        <td>4</td>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script src="./assets/libs/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
</body>

</html>