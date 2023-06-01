<?php include 'header.php' ?>

<main>
  <section id="table-section">
    <form id="table-form">
      <h3>Таблица фильмов</h3>
      <table>
          <?php
            echo '
            <tr class="table-header">
              <td>Действия</td>
              <td>Идентификатор</td>
              <td>Название</td>
              <td>Жанр</td>
              <td>Изображение</td>
              <td>Описание</td>
            </tr>';

            $sqlQuery = 'SELECT * FROM `films`;';
            $sessionTime1 = " ";
            $sessionTime2 = "1";
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)){
              $sqlQuery = 'SELECT `sessionTime`, `id` FROM `session_time` WHERE (`session_time`.`idFilm` = ' . $rows["id"] . ');';
              $session = mysqli_query($connection, $sqlQuery);
              $i = 1;
              while ($rows2 = mysqli_fetch_array($session)){
                if ($i==1){
                  $sessionTime1= $rows2["sessionTime"];
                  $idSession1 = $rows2["id"];
                }
                if ($i==2){
                  $sessionTime2= $rows2["sessionTime"];
                  $idSession2 = $rows2["id"];
                }
                $i = $i + 1;
              }
              echo '
              <tr class="table-content">
                <td><a href="supportfiles/deleteFilmProcess.php?idFilm=' . $rows["id"] . '"><img src="res/delete.png" alt="Удалить"></a><a href="changeFilm.php?idFilm=' . $rows["id"] . '&idSession1=' . $idSession1 . '&idSession2=' . $idSession2 . '"><img src="res/edit.png" alt="Изменить"></a></td>
                <td>' . $rows["id"] . '</td>
                <td>' . $rows["name"] . '</td>
                <td>' . $rows["genre"] . '</td>
                <td>' . $rows["img"] . '</td>
                <td>' . $rows["description"] . '</td>
              </tr>';
            }
          ?>
      </table>
      <a href='addFilm.php' class='table-url'>Добавить</a>
      <a href='cabinet.php' class='table-url'>Назад</a>
    </form>
  </section>
</main>

<?php include 'footer.php' ?>
