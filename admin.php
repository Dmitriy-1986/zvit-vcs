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

            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="BAT-tab" data-bs-toggle="tab" 
                    data-bs-target="#BAT" type="button" role="tab" aria-controls="BAT" 
                    aria-selected="true">Батальйон</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="VBDR-tab" data-bs-toggle="tab"
                     data-bs-target="#VBDR" type="button" role="tab" aria-controls="VBDR"
                      aria-selected="false">ВБДР</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="VMAZ-tab" data-bs-toggle="tab" 
                    data-bs-target="#VMAZ" type="button" role="tab" aria-controls="VMAZ" 
                    aria-selected="false">ВМАЗ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="VROMDTP-tab" data-bs-toggle="tab" 
                    data-bs-target="#VROMDTP" type="button" role="tab" aria-controls="VROMDTP" 
                    aria-selected="false">ВРОМ ДТП</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="TOR-tab" data-bs-toggle="tab" 
                    data-bs-target="#TOR" type="button" role="tab" aria-controls="TOR" 
                    aria-selected="false">ТОР</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="BAT" role="tabpanel" aria-labelledby="BAT-tab">
                    <!-- BAT -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 550px;">
                        <legend>Звіт від Батальйону </legend>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                            <thead>
                                <tr>
                                    <th rowspan="3" scope="col">Дата та час відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
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

                                    <th scope="col">Перевірено транспортних засобів, які використовуються для надання послуг з перевезення пасажирів</th>
                                    <th scope="col">За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)</th>
                                    <th scope="col">За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого уповноваженим підрозділомНПУ)</th>
                                    <th scope="col">За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result as $value) { ?>
                                <tr>
                                    <td><?=$year_month_day ?></td>
                                    <td><?=$value['number_bat'] ?></td>
                                    <td><?=$value['name_user'] ?></td>
                                    <td><?=$value['zmina_bat'] ?></td>
                                    <td><?=$value['total_facts_bat'] ?></td>
                                    <td><?=$value['name_carrier_bat'] ?></td>
                                    <td><?=$value['provedeno_perevirok_bat'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_bat'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_bat'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_bat'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_bat'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_bat'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_bat'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_bat'] ?></td>
                                    <td><?=$value['vidsutnist_masky_bat'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="VBDR" role="tabpanel" aria-labelledby="VBDR-tab">
                    <!-- VBDR -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 550px;">
                        <legend>Звіт від ВБДР</legend>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                            <thead>
                                <tr>
                                    <th rowspan="3" scope="col">Дата та час відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
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

                                    <th scope="col">Перевірено транспортних засобів, які використовуються для надання послуг з перевезення пасажирів</th>
                                    <th scope="col">За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)</th>
                                    <th scope="col">За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого уповноваженим підрозділомНПУ)</th>
                                    <th scope="col">За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_vbdr as $value) { ?>
                                <tr>
                                    <td><?=$year_month_day ?></td>
                                    <td><?=$vbdr ?></td>
                                    <td><?=$value['name_user_vbdr'] ?></td>
                                    <td><?=$value['zmina_vbdr'] ?></td>
                                    <td><?=$value['total_facts_vbdr'] ?></td>
                                    <td><?=$value['name_carrier_vbdr'] ?></td>
                                    <td><?=$value['provedeno_perevirok_vbdr'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_vbdr'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_vbdr'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_vbdr'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_vbdr'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_vbdr'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_vbdr'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_vbdr'] ?></td>
                                    <td><?=$value['vidsutnist_masky_vbdr'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="VMAZ" role="tabpanel" aria-labelledby="VMAZ-tab">
                    <!--  VMAZ -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 550px;">
                        <legend>Звіт від ВМАЗ</legend>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                            <thead>
                                <tr>
                                    <th rowspan="3" scope="col">Дата та час відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
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

                                    <th scope="col">Перевірено транспортних засобів, які використовуються для надання послуг з перевезення пасажирів</th>
                                    <th scope="col">За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)</th>
                                    <th scope="col">За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого уповноваженим підрозділомНПУ)</th>
                                    <th scope="col">За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_vmaz as $value) { ?>
                                <tr>
                                    <td><?=$year_month_day ?></td>
                                    <td><?=$vmaz ?></td>
                                    <td><?=$value['name_user_vmaz'] ?></td>
                                    <td><?=$value['zmina_vmaz'] ?></td>
                                    <td><?=$value['total_facts_vmaz'] ?></td>
                                    <td><?=$value['name_carrier_vmaz'] ?></td>
                                    <td><?=$value['provedeno_perevirok_vmaz'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_vmaz'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_vmaz'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_vmaz'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_vmaz'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_vmaz'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_vmaz'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_vmaz'] ?></td>
                                    <td><?=$value['vidsutnist_masky_vmaz'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="VROMDTP" role="tabpanel" aria-labelledby="VROMDTP-tab">
                    <!-- VROMDTP -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 550px;">
                        <legend>Звіт від ВРОМ ДТП</legend>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                            <thead>
                                <tr>
                                    <th rowspan="3" scope="col">Дата та час відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
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

                                    <th scope="col">Перевірено транспортних засобів, які використовуються для надання послуг з перевезення пасажирів</th>
                                    <th scope="col">За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)</th>
                                    <th scope="col">За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого уповноваженим підрозділомНПУ)</th>
                                    <th scope="col">За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_vromdtp as $value) { ?>
                                <tr>
                                    <td><?=$year_month_day ?></td>
                                    <td><?=$vromdtp ?></td>
                                    <td><?=$value['name_user_vromdtp'] ?></td>
                                    <td><?=$value['zmina_vromdtp'] ?></td>
                                    <td><?=$value['total_facts_vromdtp'] ?></td>
                                    <td><?=$value['name_carrier_vromdtp'] ?></td>
                                    <td><?=$value['provedeno_perevirok_vromdtp'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_vromdtp'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_vromdtp'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_vromdtp'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_vromdtp'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_vromdtp'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_vromdtp'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_vromdtp'] ?></td>
                                    <td><?=$value['vidsutnist_masky_vromdtp'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="TOR" role="tabpanel" aria-labelledby="TOR-tab">
                    <!-- TOR -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 550px;">
                        <legend>Звіт від ТОР</legend>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                            <thead>
                                <tr>
                                    <th rowspan="3" scope="col">Дата та час відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
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

                                    <th scope="col">Перевірено транспортних засобів, які використовуються для надання послуг з перевезення пасажирів</th>
                                    <th scope="col">За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)</th>
                                    <th scope="col">За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого уповноваженим підрозділомНПУ)</th>
                                    <th scope="col">За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_tor as $value) { ?>
                                <tr>
                                    <td><?=$year_month_day ?></td>
                                    <td><?=$tor ?></td>
                                    <td><?=$value['name_user_tor'] ?></td>
                                    <td><?=$value['zmina_tor'] ?></td>
                                    <td><?=$value['total_facts_tor'] ?></td>
                                    <td><?=$value['name_carrier_tor'] ?></td>
                                    <td><?=$value['provedeno_perevirok_tor'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_tor'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_tor'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_tor'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_tor'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_tor'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_tor'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_tor'] ?></td>
                                    <td><?=$value['vidsutnist_masky_tor'] ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/libs/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
</body>

</html>