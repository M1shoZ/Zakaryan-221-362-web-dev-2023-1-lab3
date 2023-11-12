<?php
    include "db.php";
    $result = mysqli_query($mysql, "SELECT * FROM `definitions`");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <?php $t='Закарян Михаил Арманович - 221-362 - лаб.5'?>
    <title> <?php echo $t; ?> </title>
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
                    <!-- Главная -->
                    <a href="<?php
                        $name='Главная';
                        $link='index.php';
                        $current_page=true;
                        echo $link;
                    ?>" class="highlight">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a>
                    <!-- Итальянская партия -->
                    <!-- <a href="<?php
                        $name='Итальянская партия';
                        $link='Italian.php';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a> -->
                    <!-- <a href="Italian.php">Итальянская партия</a> -->
                    <!-- Защита Каро-Канн -->
                    <!-- <a href="<?php
                        $name='Защита Каро-Канн';
                        $link='Caro_Kann.php';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a> -->
                    <!-- <a href="Caro_Kann.php">Защита Каро-Канн</a> -->
                    <!-- Шотландская партия -->
                    <!-- <a href="<?php
                        $name='Шотландская партия';
                        $link='Scottish.php';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a> -->
                    <!-- <a href="Scottish.php">Шотландская партия</a> -->
                    <!-- Определения -->
                    <a href="<?php
                        $name='Глоссарий';
                        $link='definitions.php';
                        $current_page=true;
                        echo $link;
                    ?>">
                    <?php
                        if( $current_page)
                            echo $name;
                    ?>
                    </a>
                    <!-- Свзязь -->
                    <a href="input.php">Связь</a>
                </nav>
            </div> 
        </div>
    </header>
    <!-- Основа страницы -->
    <main>
        <div class="container">
            <?php 
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <p>
                         <?php echo $row['term'] ?> - <?php echo $row['definition'] ?> 
                         
                    </p>
                    <figure class="debut_img">
                             <img  title="<?php echo $row['img'];?>" src="images\<?php echo $row['img'];?>" />
                        </figure>

                    <!-- // print("Город: " . $row['term'] . "; Идентификатор: . " . $row['id'] . "<br>"); -->
                    <?php
                }
                ?>
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