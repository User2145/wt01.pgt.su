<?php include("header.php") ?>

<main>
  <section id="changes-form-section">
    <form action="supportfiles/addSessionProcess.php" method="post" class="formProcess">
      <h3>Форма добавления сеансов</h3>
      <p>
        <label>Время:<br></label>
        <input type="datetime-local" name="session_time" value="">
      </p>
      <p>
        <label>Фильм:<br></label>
        <select name="type">
          <?php
            $sqlQuery = 'SELECT * FROM `films`;';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)) {
              echo '<option value=' . $rows["idFilm"] . '>' . $rows["name"] . '<option>';
            }
          ?>
        </select>
      <p><input type="submit" name="clac" value="Добавить"></p>
    </form>
    <a href="tableSession.php" class='btnCh'>Назад</a>
  </section>
</main>
<?php include 'footer.php' ?>
