<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Вселенная кино</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <header>
    <nav id="main-nav">
      <div class="logo-holder">
        <img src="res/logo.png" alt="Логотип" class="logo-img">
      </div>
      <ul id="main-menu">
        <li class="main-menu-item"><a href="index.php">Афиша</a></li>
        <li class="main-menu-item"><a href="news.php">Новости</a></li>
        <li class="main-menu-item"><a href="price.php">Цены</a></li>
        <li class="main-menu-item"><a href="contact.php">Контакты</a></li>
        <li class="main-menu-item"><a href="info.php">О кинотеатре</a></li>
        <?php
          include("supportfiles/config.php");
          if (!isset($_SESSION['users']['login'])){
            echo "<li class='main-menu-item'><a href='login.php'>Авторизоваться</a></li>";
          }
        ?>
        <?php
          include("supportfiles/config.php");
          if (isset($_SESSION['users']['login'])){
            echo "<li class='main-menu-item'><a href='cabinet.php'>Личный Кабинет</a></li>";
          }
        ?>
      </ul>
    </nav>
  </header>
