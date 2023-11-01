<?php include 'header.html';?>    


<?php 
$name = "";
$email = "";
$source = "";
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
        $source=$_GET['source'];
    }
?>
<div class="container">
    <div class="form">
        <form action="output.php" method="post">
            <!-- ФИО -->
            <div class="form-group">
                <label for="name">Ваше ФИО</label>
                <input id="name" type="text" name="name" placeholder="Введите ФИО" value =<?php echo $name?>>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label for="email">Почта</label>
                <input id="email" type="email" name="email" placeholder="Введите почту" value=<?php echo $email?>>
            </div>
            <!-- TEXTAREA -->
            <div class="form-group">
                <textarea placeholder="Текст сообщения" name="message"></textarea>
            </div>
            <!-- SELECT -->
            <div class="form-group">
                <select name = "type">
                    <option value = "Жалоба">Жалоба</option>
                    <option value = "Предложение">Предложение</option>
                  </select>
            </div>
            <!-- CHECKBOX -->
            <div class="form-group">
                <label for="radio">Даю согласие на обработку данных</label>
                <input type="checkbox" name="consent" required>
            </div>
            <!-- Откуда узнали -->
            <div class="form-group">
                <label for="radio">Откуда узнали о нас?</label>
                <input type="radio" name="source" value="Интернет" <?php if ($source == "Интернет") echo 'checked' ?>> Интернет
                <input type="radio" name="source" value="Друзья" <?php if ($source == "Друзья") echo 'checked' ?>> Друзья
            </div>
            <!-- FILE -->
            <div class="form-group">
                <input type="file" name="attachment">
            </div>
            <!-- BUTTON -->
            <div class="form-group">
                <button class="btn" type="submit">Отправить</button>
            </div>
            
        </form>
    </div>
    </div>
    
</body>
</html>