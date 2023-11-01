<?php include 'header.html';?> 
<div class="container">
    <div class="form">
        <?php 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $type = $_POST['type'];
        $consent = $_POST['consent'];
        $source = $_POST['source'];
        $attachment = $_POST['attachment'];

        echo '<p> Здравствуйте,'.$_POST['name'].'</p>'; //выводим ФИО
        if ($_POST['type'] == 'propose'){ //проверяем тип обращения
             echo '<p>Спасибо за ваше предложение:</p>';
             echo '<textarea>'.$_POST['message'].'</textarea>';//вывод текста сообщения
        }else{
             echo '<p>Мы рассмотрим Вашу жалобу:</p>';
             echo '<textarea>'.$_POST['message'].'</textarea>';
        }

        if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo '<div>Вы приложили следующий файл: </div>'.$_POST['attachment'];
        $N = "name=".$_POST['name'];
        $E = "email=".$_POST['email'];
        $S = "source=".$_POST['source'];
        ?> 
        <div class="form-group">
            <?php echo '<a class="btn" href="input.php?'.$N.'&'.$E.'&'.$S.'">Заполнить снова</a>';?>
                
        </div>
    </div>
</div>
