<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
  <?php
    include("../header.php");
    include('../supportfiles/config.php');
  ?>
  <div class="boxy">
      <main>
        <form id="filmForm">
          <h3>Форма таблицы пользователей</h3>
          <table>
              <?php
                $act = $_GET['action'];
                echo '
                <tr class="headerTR">
                  <td>Действия</td>
                  <td>Идентификатор</td>
                  <td>Место</td>
                  <td>Карта</td>
                  <td>Название фильма</td>
                  <td>Имя пользователя</td>
                  <td>Дата</td>
                </tr>';
                if ($act == 0){
                  $sqlQuery = 'SELECT `orders`.`id`, `orders`.`place`, `orders`.`card`, `orders`.`day`, `orders`.`month`, `orders`.`year`, `films`.`name`, `users`.`name` FROM `orders`, `films`, `users` WHERE `films`.`id`=`orders`.`idFilm` AND `orders`.`idUser`=`users`.`id`;';
                }
                if ($act == 1){
                  $idUser = $_GET['idUser'];
                  $sqlQuery = 'SELECT `orders`.`id`, `orders`.`place`, `orders`.`card`, `orders`.`day`, `orders`.`month`, `orders`.`year`, `films`.`name`, `users`.`name` FROM `orders`, `films`, `users` WHERE `orders`.`idUser`= ' . $idUser . ' AND `users`.`id`= ' . $idUser . ' AND `films`.`id`=`orders`.`idFilm`;';
                }
                global $connection;
                $type = 1;
                $result = mysqli_query($connection, $sqlQuery);
                while ($rows = mysqli_fetch_array($result)){
                  echo '
                  <tr>
                    <td><a href="deleteOrderProcess.php?id=' . $rows[0] . '">У</a><a href="changeUser.php?idUser=' . $rows[0] . '">Р</a></td>
                    <td>' . $rows[0] . '</td>
                    <td>' . $rows[1] . '</td>
                    <td>' . $rows[2] . '</td>
                    <td>' . $rows[6] . '</td>
                    <td>' . $rows[7] . '</td>
                    <td>' . $rows["day"] . ' ' . $rows["month"] . ' ' . $rows["year"] . '</td>
                  </tr>';
                }
              ?>
          </table>
          <a href='addOrderForm.php' class='btnCh'>Добавить заказ</a>
          <a href='../clientForm.php' class='btnCh'>Назад</a>
        </form>
      </main>
  </div>
</body>
</html>
