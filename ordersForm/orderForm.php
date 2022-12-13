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
    include("../supportfiles/lib/test.php");
  ?>
  <div class="boxy">
      <main>
        <form id="filmForm">
          <table>
              <?php
                $act = $_GET['action'];
                $idUser = $_GET['idUser'];
                echo '
                <tr>
                  <td>Действия</td>
                  <td>Идентификатор</td>
                  <td>Место</td>
                  <td>Карта</td>
                  <td>Название фильма</td>
                  <td>Имя пользователя</td>
                  <td>Дата</td>
                </tr>';
                if ($act == 0){
                  $sqlQuery = 'SELECT * FROM `orders`;';
                }
                global $connection;
                $type = 1;
                $result = mysqli_query($connection, $sqlQuery);
                while ($rows = mysqli_fetch_array($result)){
                  echo '
                  <tr>
                    <td><a href="supportfiles/deleteUserProcess.php?idUser=' . $rows["id"] . '">У</a><a href="changeUser.php?idUser=' . $rows["id"] . '">Р</a></td>
                    <td>' . $rows["id"] . '</td>
                    <td>' . $rows["place"] . '</td>
                    <td>' . $rows["card"] . '</td>
                    <td>' . $rows["nameFilm"] . '</td>
                    <td>' . $rows["nameUser"] . '</td>
                    <td>' . $rows["day"] . ' ' . $rows["month"] . ' ' . $rows["year"] . '</td>
                  </tr>';
                }
              ?>
          </table>
          <a href='addUser.php' class='btnCh'>Добавить пользователя</a>
          <a href='clientForm.php' class='btnCh'>Назад</a>
        </form>
      </main>
  </div>
</body>
</html>
