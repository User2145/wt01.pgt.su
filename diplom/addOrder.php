<?php include("header.php") ?>

<main>
  <section id="changes-form-section">
    <form action="supportfiles/addSessionProcess.php" method="post" class="formProcess">
      <h3>Форма добавления сеансов</h3>
      <p>
        <label>Почта:<br></label>
        <input type="text" name="email" value="">
      </p>
      <p>
        <label>Телефон:<br></label>
        <input type="text" name="tel" value="">
      </p>
      <p>
        <label>Место:<br></label>
        <input type="text" name="place" value="">
      </p>
      <p>
        <label>Ряд:<br></label>
        <input type="text" name="col" value="">
      </p>
      <p>
        <label>Фильм:<br></label>
        <select name="idFilm">
          <?php
            $sqlQuery = 'SELECT * FROM `session_time`, `films` WHERE `session_time`.`idFilm` = `films`.`id`;';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)) {
              echo '<option value="' . $rows["id"] . '">' . str_replace('T', ' ', $rows["sessionTime"]) . ' - ' . $rows["name"] . '<option>';
            }
          ?>
        </select>
      <p><input type="submit" name="clac" value="Добавить"></p>
    </form>
  </section>
</main>
<?php include 'footer.php' ?>
