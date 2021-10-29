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
                                <a class="nav-link" aria-current="page" href="index.php">головна</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bat.php">бат</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="vbdr.php">вбдр</a>
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
            <form  action="submit.php" method="post">
                <legend>Звіт від ВБДР</legend>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">
                        Ваше прізвище
                    </label>

                    <input type="text" name="name_user_vbdr" class="form-control" placeholder="Прізвище"  required>
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Вибрати зміну</label>

                    <select id="disabledSelect"  name="zmina_vbdr" class="form-select">
                        <option>Зміна</option>
                        <option>Зміна №1</option>
                        <option>Зміна №2</option>
                    </select>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <legend>Порушення нових правил пасажирських перевезень</legend>
                            <h6><u>На автотранспорті</u></h6>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Задокументовано фактів для складання
                                    протоколів</label>

                                <select id="disabledSelect" name="total_facts_vbdr" class="form-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Назва та місце реєстрації
                                    перевізника</label>

                                <input type="text" name="name_carrier_vbdr"  placeholder="ТОВ 'Автосвіт ЛТД' м.Коростень" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Проведено перевірок (т/з, які
                                    здійснюють
                                    міжобласні перевезення)</label>

                                <select id="disabledSelect" name="provedeno_perevirok_vbdr" class="form-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Складено протоколів</label>

                                <select id="disabledSelect" name="skladeno_protokoliv_vbdr" class="form-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">
                                    Кількість субєктів господарювання які відмовились
                                    виконувати зобовязання щодо перевезення
                                </label>

                                <select id="disabledSelect" name="subyekty_yaki_vidmovylys_vbdr" class="form-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <h6><u>На залізничному транспорті</u></h6>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">
                                    Проведено перевірок
                                </label>

                                <select id="disabledSelect" name="provedeno_perevirok_zd_vbdr" class="form-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect"  class="form-label">
                                    Складено протоколів
                                </label>

                                <select id="disabledSelect" name="skladeno_protokoliv_zd_vbdr" class="form-select">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <legend>Нелегальні перевізники</legend>

                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        Перевірено транспортних засобів, які використовуються для
                                        надання послуг з перевезення пасажирів
                                    </label>

                                    <select id="disabledSelect" name="illegal_carriers_checked_vbdr" class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">
                                        За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)
                                    </label>

                                    <select id="disabledSelect" name="vidsutnist_litsenziyi_vbdr" class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого
                                        уповноваженим підрозділомНПУ)
                                    </label>

                                    <select id="disabledSelect" name="vidsutnist_marshrutu_vbdr" class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)
                                    </label>

                                    <select id="disabledSelect" name="vidsutnist_masky_vbdr" class="form-select">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>

                        </div>
                    </div>

                    <button type="submit" name="submit"  class="btn btn-primary w-100">Відправити</button>
            </form>
        </div>
        </div>

    </div>

    <script src="./assets/libs/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
</body>

</html>