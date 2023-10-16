<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $t='Закарян Михаил Арманович - 221-362 - лаб.3'?>
    <title><?php echo 't'; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <div class="menu_container">
           <h1>MZGambit</h1>
            <div class="container">
                <nav class="menu">
                    <a href="index.php">Главная</a>
                    <a href="Italian.php">Итальянская партия</a>
                    <a class="highlight" href="Caro_Kann.php">Защита Каро-Канн</a>
                    <a href="Scottish.php">Шотландская партия</a>
                </nav>
            </div> 
        </div>
    </header>
        <!-- Основа страницы -->
    <main>
        <div class="container">
            <section id="Caro_Kann">
                <h2 class="h2center">Защита Каро-Канн</h2>
                <p>Защита Каро-Канн названа в честь двух шахматистов, разработавших ее основы: 
                    Горацио Каро и Маркуса Канна. Относится к полуоткрытым началам. 
                    Одним из крупнейших знатоков защиты Каро — Канн является Анатолий Карпов. 
                    Карпов отмечал особенность Каро — Канн: при желании чёрных, избежать защиты Каро — 
                    Канн нельзя, то есть чёрные определяют выбор дебюта</p>
                <figure class="debut_img">
                    <img src="images/karo-kann.png" alt="Защита Каро-Канн">
                </figure>
            </section>
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            &copy; Закарян М.А.
            <p>
                    Сформированно
                    <?php date_default_timezone_set('Europe/Moscow'); ?>
                    <?php echo date('d.m.y H:i:s'); ?>
                </p> 
        </div>
    </footer>
</body>
</html>