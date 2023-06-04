<?php include 'header.php' ?>

<main>
  <section id="table-section">
    <form id="table-form">
      <h3>Таблица пользователей</h3>
      <table>
          <?php
            echo '
            <tr class="table-header">
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
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)){
              echo '
              <tr class="table-content">
                <td><a href="supportfiles/deleteUserProcess.php?idUser=' . $rows["id"] . '"><img src="res/delete.png" alt="Удалить"></a><a href="changeUser.php?idUser=' . $rows["id"] . '"><img src="res/edit.png" alt="Изменить"></a></td>
                <td>' . $rows["id"] . '</td>
                <td>' . $rows["login"] . '</td>
                <td>' . $rows["password"] . '</td>
                <td>' . $rows["name"] . '</td>
                <td>' . $rows["email"] . '</td>
                <td>' . $rows["type"] . '</td>
              </tr>';
            }
          ?>
      </table>
      <a href='addUser.php' class='table-url'>Добавить</a>
    </form>
  </section>
</main>

<?php include 'footer.php' ?>
