<?php include("header.php") ?>

<main>
  <section id="changes-form-section">
    <form action="supportfiles/addSessionProcess.php" method="post" class="formProcess">
      <h3>Форма добавления сеансов</h3>
      <p>
        <label>Время:<br></label>
        <input type="datetime-local" name="sessionTime" value="">
      </p>
      <p>
        <label>Фильм:<br></label>
        <select name="idFilm">
          <?php
            $sqlQuery = 'SELECT * FROM `films`;';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)) {
              echo '<option value="' . $rows["id"] . '">' . $rows["name"] . '<option>';
            }
          ?>
        </select>
      <p><input type="submit" name="clac" value="Добавить"></p>
    </form>
  </section>
</main>
<?php include 'footer.php' ?>