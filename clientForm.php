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

  <main class="clientform">
    <?php
      if ($_SESSION['users']['type'] == 1){
        echo "<p class='nameline'>Здравствуйте, администратор</p>";
      }
      if ($_SESSION['users']['type'] == 3){
        echo "<p class='nameline'>Здравствуйте, " . $_SESSION['users']['name'] . "!</p>";
      }
    ?>
    <p class="clientButton"><a href='ordersDataBase.php' class='btnclient'>История заказов</a></p>
    <p class='clientButton'><a href='supportfiles/exitProcess.php' class='btnclient'>Выйти</a></p>
    <?php
      if ($_SESSION['users']['type'] == 1){
        echo "<p class='nameline'>Формы транзакций</p>";
        echo "<p class='clientButton'><a href='filmForm.php' class='btnclient'>Форма фильмов</a></p>";
        echo "<p class='clientButton'><a href='userForm.php' class='btnclient'>Форма пользователей</a></p>";
        echo "<p class='clientButton'><a href='ordersForm/orderForm.php?action=0' class='btnclient'>Форма заказов</a></p>";
      }
    ?>
  </main>

    <?php include 'footer.php' ?>
</body>
</html>
