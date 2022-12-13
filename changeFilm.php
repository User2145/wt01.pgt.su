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
  <?php include("header.php") ?>
  <?php
    $idFilm = $_GET['idFilm'];
    $idSession1 = $_GET['idSession1'];
    $idSession2 = $_GET['idSession2'];
    $q = "SELECT * FROM films WHERE `films`.`id` = '$idFilm' ";
    $result = mysqli_query($connection, $q);
    while ($rows = mysqli_fetch_array($result)){
      $name = $rows['name'];
      $genre = $rows['genre'];

      $sqlQuery = 'SELECT `sessionTime` FROM `session_time` WHERE (`session_time`.`idFilm` = ' . $rows["id"] . ');';
      $session = mysqli_query($connection, $sqlQuery);
      $i = 1;
      while ($rows2 = mysqli_fetch_array($session)){
        if ($i==1){
          $sessionTime1= $rows2["sessionTime"];
        }
        if ($i==2){
          $sessionTime2= $rows2["sessionTime"];
        }
        $i = $i + 1;
      }
    }
  ?>
  <div class="boxy">
      <main>
        <form action="supportfiles/changeFilmProcess.php" method="post">
          <input type="text" name="idFilm" value="<?php echo $idFilm ?>" style="display: none;">
          <input type="text" name="idSession1" value="<?php echo $idSession1 ?>" style="display: none;">
          <input type="text" name="idSession2" value="<?php echo $idSession2 ?>" style="display: none;">
          <p>
            <label>Название фильма:<br></label>
            <input name="name" type="text" size="15" maxlength="15" value="<?php echo $name?>">
          </p>
          <p>
            <label>Жанры:<br></label>
            <input name="genre" type="text" size="15" maxlength="40" value="<?php echo $genre?>">
          </p>
          <p>
            <label>Картинка:<br></label>
            <input name="img" type="file" size="15" maxlength="15">
          </p>
          <p>
            <label>Первый сеанс:<br></label>
            <input type="datetime-local" name="session_time1" value="<?php echo $sessionTime1?>">
          </p>
          <p>
            <label>Второй сеанс:<br></label>
            <input type="datetime-local" name="session_time2" value="<?php echo $sessionTime2?>">
          </p>
          <p><input type="submit" name="clac" value="Изменить"></p>
        </form>
        <a href="filmForm.php" class='btnCh'>Назад</a>
      </main>
  </div>
</body>
</html>
