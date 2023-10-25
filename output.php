<?php include 'header.html';?> 
<?php 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message = $_POST['message'];
    $type = $_POST['type'];
    $consent = $_POST['consent'];
    $source=$_POST['source'];
    $attachment=$_POST['attachment'];


    echo '<p> Здравствуйте,'.$_POST['name'].'</p>'; //выводим ФИО
      if ($_POST['type'] == 'propose'){ //проверяем тип обращения
             echo '<p>Спасибо за ваше предложение:</p>';
             echo '<textarea>'.$_POST['message'].'</textarea>';//вывод текста сообщения
      }else{
             echo '<p>Мы рассмотрим Вашу жалобу:</p>';
             echo '<textarea>'.$_POST['message'].'</textarea>';
      }

      if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo '<div>Вы приложили следующий файл: </div>'.$_POST['attachment'];


      
?> 
<?php 
echo '<a class="btn" href="input.php?N='.$_POST['name'].'&E='.$_POST['email'].'&S='.$_POST['source'].'">Заполнить снова</a>';


?>

<form action="output.php" method="get">
        <!-- ФИО -->
            <input type="hidden" id="name" type="text" name="name" placeholder="Введите ФИО" value =<?php echo $name?>>
        </div>
        <!-- Email -->
            <input type="hidden" id="email" type="email" name="email" placeholder="Введите почту" value=<?php echo $email?>>
        <!-- Откуда узнали -->
            <input type="hidden" type="radio" name="source" value=<?php echo $source?> > Интернет
        </div>
</form>
