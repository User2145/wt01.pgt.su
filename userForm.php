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
          <h3>Форма таблицы пользователей</h3>
          <table>
              <?php
                echo '
                <tr class="headerTR">
                  <td>Действия</td>
                  <td>Идентификатор</td>
                  <td>Логин</td>
                  <td>Пароль</td>
                  <td>Имя</td>
                  <td>Почта</td>
                  <td>Тип</td>
                </tr>';

                $sqlQuery = 'SELECT * FROM `users`;';
                global $connection;
                $type = 1;
                $result = mysqli_query($connection, $sqlQuery);
                while ($rows = mysqli_fetch_array($result)){
                  if ($rows["type"]==1){
                    $type = "Администратор";
                  }
                  if ($rows["type"]==2){
                    $type = "Модератор";
                  }
                  if ($rows["type"]==3){
                    $type = "Клиент";
                  }
                  echo '
                  <tr>
                    <td><a href="supportfiles/deleteUserProcess.php?idUser=' . $rows["id"] . '">У</a><a href="changeUser.php?idUser=' . $rows["id"] . '">Р</a><a href="../ordersForm/orderForm.php?idUser=' . $rows["id"] . '&action=1">Заказы</a></td>
                    <td>' . $rows["id"] . '</td>
                    <td>' . $rows["login"] . '</td>
                    <td>' . $rows["password"] . '</td>
                    <td>' . $rows["name"] . '</td>
                    <td>' . $rows["email"] . '</td>
                    <td>' . $type . '</td>
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
