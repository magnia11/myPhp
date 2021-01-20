<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Интернет-магазин ноутбуков</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include "../templates/header.php"; ?>
    <div class="leftblock">
        <? include "../templates/menu.php"; ?>
    </div>
    <div class="content">
        <h1>Наш адрес:</h1>
        <p><b>Телефон:</b> 8 495 800 98 98</p>
        <p><b>Адрес:</b> г. Москва, 2-я улица Третьякова, дом 33</p>
        <p><b>Email:</b> igrushki@mail.ru</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A41905db2af1d77ad4ca56ee5539dc299f15b83973a9315a0ff2fe5bf4ed1a7b2&amp;width=547&amp;height=387&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <hr>
        <h2>Напишите нам:</h2>
        <form action="#" class="form-item" method="post">
           <p>
               <label for="display-name">Имя:</label>
               <input type="text" id="display-name" name="display-name" size="30" maxlength="20" placeholder="Введите Имя" required>
            </p>
            <p>
               <label for="display-mail">Email:</label>
               <input type="text" id="display-mail" name="display-mail" size="30" maxlength="20" placeholder="Введите Email" required>
            </p>
            <p>
               <label for="display-text">Тема:</label>
               <textarea id="display-text" cols="37" rows="10" maxlength="400"  required></textarea>
            </p>
            <p><input type="submit"></p>
        </form>
    </div>
    <footer>
        <? include "../templates/footer.php"; ?>
    </footer>
</div>
</body>
</html>