<?php include 'feedback.html';?>    
<?php 
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
        $source=$_GET['source'];
    }
?>

<main>
        <div class="class">
            hello world!
        </div>
    </main>
    <form action="output.php" method="post">
        <!-- ФИО -->
        <div class="form-group">
            <label for="fullName">Ваше ФИО</label>
            <input id="fullName" type="text" name="fullName" placeholder="Введите ФИО">
        </div>
        <!-- Email -->
        <div class="form-group">
            <label for="email">Почта</label>
            <input id="email" type="email" name="email" placeholder="Введите почту">
        </div>
        <!-- Откуда узнали -->
        <div class="form-group">
            <label for="radio">Откуда узнали о нас?</label>
            <input type="radio" name="source" value="Интернет"> Интернет
            <input type="radio" name="source" value="Друзья"> Друзья
        </div>
        <!-- SELECT -->
        <div class="form-group">
            <select name = "type">
                <option value = "Жалоба">Жалоба</option>
                <option value = "Предложение">Предложение</option>
              </select>
        </div>
        <!-- TEXTAREA -->
        <div class="form-group">
            <textarea placeholder="Текст сообщения" name="message"></textarea>
        </div>
        <!-- FILE -->
        <div class="form-group">
            <input type="file" name="attachment">
        </div>
        <!-- CHECKBOX -->
        <div class="form-group">
            <label for="radio">Даю согласие на обработку данных</label>
            <input type="checkbox" name="consent" required>
        </div>
        <!-- BUTTON -->
        <div class="form-group">
            <button class="btn" type="submit">Отправить</button>
        </div>
    </form>
    
</body>
</html>