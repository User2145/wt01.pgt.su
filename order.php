<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="styles/orderstyle.css">
</head>
<body>
  <main id="mainorder">
    <div class="order">

        <?php
          include('supportfiles/config.php');

          $idPlace = $_GET['idPlace'];
          $idFilm = $_GET['idFilm'];

          $q = 'SELECT session_time.id, session_time.sessionTime FROM `session_time`, `films` WHERE films.id = session_time.idFilm AND films.id = ' . $idFilm . ';';
          $result = mysqli_query($connection, $q);

          foreach($result as $row){
            $sessions[] = $row['sessionTime'];
            $sessionsId[] = $row['id'];
          }
        ?>

      <form action="supportfiles/orderProcess.php" method="post">
        <input type="text" name="idFilm" value="<?php echo $idFilm ?>" style="display: none;">
        <table>
          <?php
            $col = 1;
            while ($col < 5){
              $row = 1;
              echo '<tr>';
              while ($row < 7){
                $td = '<td><a href="?idFilm=' . $idFilm . '&idPlace=' . $col . '' . $row . '"><img src="../res/chair.png" alt="альтернативный текст" /></a></td>';
                echo $td;
                $row = $row + 1;
              }
              echo '</tr>';
              $col = $col + 1;
            }
          ?>
        </table>
        <p>
          <label>Место в зале:<br></label>
          <input type="text" name="place" value="<?php echo $idPlace ?>">
        </p>
        <p>
          <label>Номер карты:<br></label>
          <input name="card" type="text" size="15" maxlength="15">
        </p>
        <p>
          <label>Сеанс 1:<br></label>
          <input name="idSession_time" type="radio" value="<?php echo $sessionsId[0] ?>"><input type="datetime-local" name="date" value="<?php echo($sessions[0]) ?>" readonly></input>
        </p>
        <p>
          <label>Сеанс 2:<br></label>
          <input name="idSession_time" type="radio" value="<?php echo $sessionsId[1] ?>"><input type="datetime-local" name="date" value="<?php echo($sessions[1]) ?>" readonly></input>
        </p>
        <input type="submit" value="Заказать" name="input"></input>
      </form>
    </div>
  </main>

</body>
</html>
