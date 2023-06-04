<?php include("header.php") ?>
<?php
  $idSession = $_GET['idSession'];
  $sqlQuery = "SELECT * FROM `session_time` WHERE `session_time`.`id` = '$idSession' ;";
  global $connection;
  $session = mysqli_query($connection, $sqlQuery);
  while ($rows = mysqli_fetch_array($session)){
    $sessionTime= $rows["sessionTime"];
  }
?>
<main>
  <section id="changes-form-section">
    <form action="supportfiles/changeSessionProcess.php" method="post" class="formProcess">
      <h3>Форма добавления сеансов</h3>
      <p>
        <label>Время:<br></label>
        <input type="datetime-local" name="sessionTime" value="<?php echo $sessionTime?>">
      </p>
      <p>
        <label>Фильм:<br></label>
        <select name="idFilm">
          <?php
            $sqlQuery = 'SELECT * FROM `films`;';
            global $connection;
            $result = mysqli_query($connection, $sqlQuery);
            while ($rows = mysqli_fetch_array($result)) {
              echo '<option value=' . $rows["id"] . '>' . $rows["name"] . '<option>';
            }
          ?>
        </select>
      <input name="id" type="hidden" value="<?php echo $idSession;?>">
      <p><input type="submit" name="clac" value="Изменить"></p>
    </form>
  </section>
</main>
<?php include 'footer.php' ?>
