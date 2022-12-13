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
  <?php include 'header.php' ?>

  <main>
    <div class="contmain">
      <table>
          <?php
            echo '
            <tr>
              <td>Название фильма</td>
              <td>Дата оформления заказа</td>
              <td>Сессия</td>
            </tr>';

            $sqlQuery = 'SELECT `orders`.`day`, `orders`.`month`, `orders`.`year`, `session_time`.`sessionTime`, `films`.`name` FROM `orders`, `session_time`, `films`, `users` WHERE `orders`.`idFilm` = `films`.`id` AND `orders`.`idSession_time` = `session_time`.`id` AND `orders`.`idUser` = ' . $_SESSION['users']['id'] . ' AND `users`.`id` = ' . $_SESSION['users']['id'] . ';';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)){
              $session = mysqli_query($connection, $sqlQuery);
              $i = 1;
              echo '
              <tr>
                <td>' . $rows["name"] . '</td>
                <td>' . $rows["day"] . ' ' . $rows["month"] . ' ' . $rows["year"] . '</td>
                <td>' . '<input type="datetime-local" value=' . $rows["sessionTime"] . ' readonly>' . '</td>
              </tr>';
            }
          ?>
      </table>
    </div>
  </main>

    <?php include 'footer.php' ?>
</body>
</html>
