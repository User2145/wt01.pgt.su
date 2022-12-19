<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
      <div class="conteiner header">
        <div class="logodiv">
          <a href="/"><img src="res/logo.png" id="logoimg"></a>
          <a href="/" id="logo">LOGO</a>
        </div>
        <nav><ul>
            <li><a href="/index.php" class="hvr-underline-from-center">Киноафиша</a></li>
            <li><a href="/news.php" class="hvr-underline-from-center">Новости</a></li>
            <?php
              include("supportfiles/config.php");
              if (isset($_SESSION['users']['login'])){
                echo "<li><a href='/techsupport.php' class='hvr-underline-from-center'>Связаться с техподдержкой</a></li>";
              }
            ?>

            <?php
              include("supportfiles/config.php");
              if (isset($_SESSION['users']['login'])){
                echo "<li><a href='/clientForm.php' class='hvr-underline-from-center'>Личный Кабинет</a></li>";
              }
            ?>
            <?php
              include("supportfiles/config.php");
              if (!isset($_SESSION['users']['login'])){
                echo "<li><a href='/login.php' class='hvr-underline-from-center'>Авторизация</a></li>";
              }
            ?>
            <li><a href="/aboutus.php" class="hvr-underline-from-center">О нас</a></li>
        </ul></nav>
      </div>
    </header>
</body>
</html>
