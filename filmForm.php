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
  <?php
    include("header.php");
    include("supportfiles/lib/test.php");
  ?>
  <div class="boxy">
      <main>
        <form id="filmForm">
          <table>
              <?php
                echo '
                <tr>
                  <td>Действия</td>
                  <td>Идентификатор</td>
                  <td>Название</td>
                  <td>Жанр</td>
                  <td>Изображение</td>
                  <td>Сессии</td>
                </tr>';

                $sqlQuery = 'SELECT * FROM `films`;';
                global $connection;
                $result = mysqli_query($connection, $sqlQuery);
                while ($rows = mysqli_fetch_array($result)){
                  $sqlQuery = 'SELECT * FROM `films`, `session_time` WHERE (`films`.`' . $rows["id"] . '` = `session_time`.`idFilm`);';
                  $session = mysqli_query($connection, $sqlQuery);
                  $i = 1;
                  while ($rows2 = mysqli_fetch_array($result)){
                    if ($i==1){
                      $sessionTime1= $rows2["sessionTime"];
                    }
                    if ($i==2){
                      $sessionTime2= $rows2["sessionTime"];
                    }
                    $i = $i + 1;
                  }
                  echo '
                  <tr>
                    <td><a href="">У</a><a href="">Р</a></td>
                    <td>' . $rows["id"] . '</td>
                    <td>' . $rows["name"] . '</td>
                    <td>' . $rows["genre"] . '</td>
                    <td>' . $rows["img"] . '</td>
                    <td>' . $sessionTime1 . ',' . $sessionTime2 . '</td>
                  </tr>';
                }
              ?>
          </table>
        </form>
      </main>
  </div>
</body>
</html>
