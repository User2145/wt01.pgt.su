<?php include 'header.php' ?>

<main>
  <section id="table-section">
    <form id="table-form">
      <h3>Таблица заказов</h3>
      <table>
          <?php
            echo '
            <tr class="table-header">
              <td>Действия</td>
              <td>Идентификатор</td>
              <td>Телефон</td>
              <td>Почта</td>
              <td>Фильм</td>
              <td>Сеанс</td>
              <td>Ряд</td>
              <td>Место</td>
            </tr>';

            $sqlQuery = 'SELECT `orders`.`id`, `orders`.`tel`, `orders`.`email`, `films`.`name`, `session_time`.`sessionTime`, `orders`.`col`, `orders`.`place`
            FROM `orders`, `session_time`, `films`
            WHERE `session_time`.`idFilm` = `films`.`id` AND `orders`.`idSession_time` = `session_time`.`id`;';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)){
              echo '
              <tr class="table-content">
                <td><a href="process/deleteOrder.php?idOrder=' . $rows["id"] . '"><img src="res/delete.png" alt="Удалить"></a><a href="changeOrder.php?idOrder=' . $rows["id"] . '"><img src="res/edit.png" alt="Изменить"></a></td>
                <td>' . $rows["id"] . '</td>
                <td>' . $rows["tel"] . '</td>
                <td>' . $rows["email"] . '</td>
                <td>' . $rows["name"] . '</td>
                <td>' . $rows["sessionTime"] . '</td>
                <td>' . $rows["col"] . '</td>
                <td>' . $rows["place"] . '</td>
              </tr>';
            }
          ?>
      </table>
      <a href='addOrder.php' class='table-url'>Добавить</a>
    </form>
  </section>
</main>

<?php include 'footer.php' ?>
