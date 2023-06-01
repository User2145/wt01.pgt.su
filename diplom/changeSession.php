<?php include("header.php") ?>
<?php
  $idSession = $_GET['idSession'];
  $sqlQuery = 'SELECT `sessionTime` FROM `session_time` WHERE `session_time`.`id` = ' . $idSession . ';';
  global $connection;
  $session = mysqli_query($connection, $sqlQuery);
  while ($rows = mysqli_fetch_array($session)){
    $sessionTime= $rows["sessionTime"];
  }
?>
<main>
  <section id="changes-form-section">
    <form action="supportfiles/addSessionProcess.php" method="post" class="formProcess">
      <h3>Форма добавления сеансов</h3>
      <p>
        <label>Время:<br></label>
        <input type="datetime-local" name="session_time1" value="<?php echo $sessionTime?>">
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
      <p><input type="submit" name="clac" value="Изменить"></p>
    </form>
    <a href="tableSession.php" class='btnCh'>Назад</a>
  </section>
</main>
<?php include 'footer.php' ?>
