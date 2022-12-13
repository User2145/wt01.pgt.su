<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <?php include("header.php"); ?>
  <?php
    $idUser = $_GET['idUser'];
    $sqlQuery = "SELECT * FROM `users` WHERE `users`.`id` = '$idUser' ;";
    global $connection;
    $result = mysqli_query($connection, $sqlQuery);
    while ($rows = mysqli_fetch_array($result)){
      $login = $rows['login'];
      $password = $rows['password'];
      $name = $rows['name'];
      $email = $rows['email'];
      $type = $rows['type'];
    }

  ?>
  <div class="boxy">
      <main>
        <form action="supportfiles/addUserProcess.php" method="post">
          <p>
            <label>Логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15" value="<?php echo $login ?>">
          </p>
          <p>
            <label>Пароль:<br></label>
            <input name="password" type="text" size="15" maxlength="40" value="<?php echo $password ?>">
          </p>
          <p>
            <label>Имя:<br></label>
            <input name="name" type="text" size="15" maxlength="40" value="<?php echo $name ?>">
          </p>
          <p>
            <label>Почта:<br></label>
            <input name="email" type="text" size="15" maxlength="40" value="<?php echo $email ?>">
          </p>
          <p>
            <label>Тип:<br></label>
            <?php
              if ($type==1){
                echo '
                <select name="type">
                  <option value="1">Администратор<option>
                  <option value="2">Модератор<option>
                  <option value="3">Пользователь<option>
                </select>';
              }
              if ($type==2){
                echo '
                <select name="type">
                  <option value="2">Модератор<option>
                  <option value="1">Администратор<option>
                  <option value="3">Пользователь<option>
                </select>';
              }
              if ($type==3){
                echo '
                <select name="type">
                  <option value="3">Пользователь<option>
                  <option value="2">Модератор<option>
                  <option value="1">Администратор<option>
                </select>';
              }
            ?>
          </p>
          <p><input type="submit" name="clac" value="Добавить"></p>
        </form>
        <a href="userForm.php" class='btnCh'>Назад</a>
      </main>
  </div>
</body>
</html>
