<?php include 'header.php' ?>

<main>
  <section id="table-section">
    <form id="table-form">
      <h3>Таблица сеансов</h3>
      <table>
          <?php
            echo '
            <tr class="table-header">
              <td>Действия</td>
              <td>Идентификатор</td>
              <td>Время</td>
              <td>Идентификатор фильма</td>
              <td>Название фильма</td>
            </tr>';

            $sqlQuery = 'SELECT `session_time`.`id`, `session_time`.`sessionTime`, `session_time`.`idFilm`, `films`.`name` FROM `session_time`, `films` WHERE `session_time`.`idFilm` = `films`.`id`;';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)){
              echo '
              <tr class="table-content">
                <td><a href="process/deleteSession.php?idSession=' . $rows["id"] . '"><img src="res/delete.png" alt="Удалить"></a><a href="changeSession.php?idSession=' . $rows["id"] . '"><img src="res/edit.png" alt="Изменить"></a></td>
                <td>' . $rows["id"] . '</td>
                <td>' . $rows["sessionTime"] . '</td>
                <td>' . $rows["idFilm"] . '</td>
                <td>' . $rows["name"] . '</td>
              </tr>';
            }
          ?>
      </table>
      <a href='addSession.php' class='table-url'>Добавить</a>
      <a href='cabinet.php' class='table-url'>Назад</a>
    </form>
  </section>
</main>

<?php include 'footer.php' ?>
