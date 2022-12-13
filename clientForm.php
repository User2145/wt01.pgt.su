<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/clientCSS.css">
</head>
<body>
  <?php
    include 'header.php';
    include ("supportfiles/config.php");
  ?>

  <main>
    <?php
      if ($_SESSION['users']['type'] == 1){
        echo "<p class='nameline'>Здравствуйте, администратор</p>";
      }
      if ($_SESSION['users']['type'] == 3){
        echo "<p class='nameline'>Здравствуйте, " . $_SESSION['users']['name'] . "!</p>";
      }
    ?>
    <a href='ordersDataBase.php' class='btnclient'>История заказов</a>
    <?php
      if ($_SESSION['users']['type'] == 1){
        echo "<a href='addFilm.php' class='btnclient'>Добавить фильм</a>";
        echo "<a href='filmForm.php' class='btnclient'>Форма фильмов</a>";
      }
    ?>
    <a href='supportfiles/exitProcess.php' class='btnclient'>Выйти</a>
  </main>

    <?php include 'footer.php' ?>
</body>
</html>
