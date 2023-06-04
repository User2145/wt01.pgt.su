<?php include 'header.php' ?>

<main>
  <section id="table-section">
    <form id="table-form">
      <h3>Таблица новостей</h3>
      <table>
          <?php
            echo '
            <tr class="table-header">
              <td>Действия</td>
              <td>Идентификатор</td>
              <td>Название</td>
              <td>Изображение</td>
              <td>Описание</td>
              <td>Дата</td>
            </tr>';

            $sqlQuery = 'SELECT * FROM `news`;';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)){
              echo '
              <tr class="table-content">
                <td><a href="supportfiles/deleteNewsProcess.php?idNews=' . $rows["id"] . '"><img src="res/delete.png" alt="Удалить"></a><a href="changeNews.php?idNews=' . $rows["id"] . '"><img src="res/edit.png" alt="Изменить"></a></td>
                <td>' . $rows["id"] . '</td>
                <td>' . $rows["title"] . '</td>
                <td>' . $rows["image"] . '</td>
                <td>' . $rows["description"] . '</td>
                <td>' . $rows["dateCreate"] . '</td>
              </tr>';
            }
          ?>
      </table>
      <a href='addNews.php' class='table-url'>Добавить</a>
    </form>
  </section>
</main>

<?php include 'footer.php' ?>