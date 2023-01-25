<!DOCTYPE html><html lang="en">
<?php
    session_start();
    $auth = $_SESSION['auth'] ?? null; // авторизация
    $nouser = isset($_SESSION['nouser']) ? 'Пользователя не существует' : null;
    $wrongPassword = isset($_SESSION['wrongpassword']) ? 'Неверный пароль' : null;

    $login = $_SESSION['login'] ?? null; // активный пользователь
    $_SESSION[$login]['visit'] = $_SESSION[$login]['visit'] ?? 0; // число обновлений страницы активным пользователем
    if($auth) $_SESSION[$login]['visit']++;
    $_SESSION[$login]['exit'] = $_SESSION[$login]['exit'] ?? 0;

    $json['auth'] = $auth;
    $json['login'] = $login;
    $json['authtime'] = $_SESSION['authTime'] ?? 0; // время авторизации
    $json['exit'] = $_SESSION[$login]['exit'];
    $json['visit'] =  $_SESSION[$login]['visit'];

    // var_dump($_SESSION);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/81f48f14-1974-4d35-8838-9b4801c63847-2267042.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/loginWindow.css">
    <title> АУРА</title>
</head>

<body>
    <header class='header'>
    
    <!-- заголовок -->
    <p class='header__title'> <img src="img/81f48f14-1974-4d35-8838-9b4801c63847-2267042.png"></p>
    <!-- меню навигации -->
    <nav class="header__menu"><ul>
        <li><a href="#">Главная</a></li>
        <li><a href="#">Услуги</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Лицензии</a></li>
        <li><a href="#">Контакты</a></li>
    </ul></nav>    
    
    <!-- имя пользователя и время входа -->
    <p class='header__user'></p>
    <!-- Кнопка входа/выхода -->
    <input type='button' class='header__btn'>
    </header>

    <main>
    <section class='container visit-card'>
        <p class='visit-card__company-name'> АУРА </p>
        <p class='visit-card__address'>Спа-процедуры, массаж, обучение.</p>
        <input type="button" class='btn btn-call' value="Запись">
    </section>
      
    <?php
        include 'pages/loginWindow.php'; // модальное окно входа      
    ?>


    <section class='container'>
        <h2 class='services-container__title'>Услуги</h2>
        <div class='services-container'>
        <section class='service'>
            <h3 class='service__title'>Кедровая(фито) бочка</h3>
            <img src="img/navi_barrel_159.jpg" width="350" height="300" alt="">
            <p class='service__info'>Во время пребывания в такой бочке, тело находится внутри емкости, а голова снаружи. 
                Широкое применение кедровой бочки в медицине обусловлено ее высокой эффективностью в лечении многих заболеваний</p>
            <ul class='service__pricelist'>
                <li>1 процедура — <span class='price'>800₽</span></li>
                <li>Комплекс из 10 процедур — <span class='price'>6000₽</span></li>
            </ul>
        </section>

        <section class='service'> 
            <h3 class='service__title'>Массаж "Тайский"</h3>
            <img src="img/pro-taiskii-massazh-v2.orig.jpg" width="350" height="300" alt="">
            <p class='service__info'>Особенность массажа заключается не только в восстановлении связок и суставов, 
                улучшения кровоснабжения мышц и кожного покрова, расслабления триггерных зон, 
                но и использование миорелаксационных приемом вытяжения позвоночника, а также массирование биоактивных точек, 
                что способствует расслаблению организма.</p>
            <ul class='service__pricelist'>
                <li>60 минут — <span class='price'>3200₽</span></li>
                <li>90 минут — <span class='price'>4500₽</span></li>
                <li>120 минут — <span class='price'>5200₽</span></li>
            </ul>
        </section>

        <section class='service'>
            <h3 class='service__title'>СПА</h3>
            <img src="img/241946310840893.jpg" width="350" height="300" alt="">
            <p class='service__info'>Основное действие spa-процедуры направлено на снятие психологического и физического напряжения,
                 стимуляции кровообращения, восстановления тонуса и омоложения всего организма.</p>
            <ul class='service__pricelist'>
                <li>Магия камней — <span class='price'>2100₽</span></li>
                <li>Тропический рай — <span class='price'>2500₽</span></li>
                <li>Шоколадная девочка — <span class='price'>3000₽</span></li>
            </ul>
        </section>

        <section class='service'>
            <h3 class='service__title'>Душ Шарко</h3>
            <img src="img/RT8LvIKWIY0.jpg" width="350" height="300" alt="">
            <p class='service__info'>Стимулирует работу головного и спинного мозга, 
                улучшает процесс кровообращения, укрепляет сосуды. 
                Помимо прочего, душ Шарко способствует нормализации обмена веществ, снижает воспалительные процессы. 
                </p>
            <ul class='service__pricelist'>
                <li>1 процедура — <span class='price'>1000₽</span></li>
                <li>Комплекс из 10 процедур — <span class='price'>9000₽</span></li>
            </ul>
        </section>

        <section class='service'>
            <h3 class='service__title'>Обучение разным видам массажа</h3>
            <img src="img/7eaffebf157df442f682abfe978b10dbshutterstock_693068743.jpg" width="350" height="300" alt="">
            <button type="record" class="one">Записаться</button>
        </section>

        <section class='service'>
            <h3 class='service__title'>Для пар скидка 20% к дню всех влюбленных &#128151;</h3>
            <img src="img/01cf5e02e1a97f55a41bb353002509c6_1200x0_720.478.0.0.jpg" width="350" height="300" alt="">
            <button type="record" class="two">Записаться</button>
        </section>
        </div>
    </section>
    </main>

    <footer class='footer'>
            <p>ООО "АУРА"</p>
            <p>ОГРН: 1192651012707</p>
            <p>ИНН: 2635241884</p>
            <p>Адрес: ул. Космонавтов, 2, Ставрополь, Россия</p>
            <p>Все права защищены 2023 ©</p>
    </footer>

    <?php
        unset($_SESSION['nouser']);
        unset($_SESSION['password']);
    ?>
    
    <div id="data-php" data-json=<?=json_encode($json)?>></div>

    <script type='text/javascript' src='js/dateFunc.js'></script>
    <script type='text/javascript' src='js/index.js'></script>
    <script type='text/javascript' src='js/loginInputWindow.js'></script>
</body>
</html>