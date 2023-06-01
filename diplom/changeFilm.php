<?php include("header.php"); ?>
<?php
  $idFilm = $_GET['idFilm'];
  $idSession1 = $_GET['idSession1'];
  $idSession2 = $_GET['idSession2'];
  $q = "SELECT * FROM films WHERE `films`.`id` = '$idFilm' ";
  $result = mysqli_query($connection, $q);
  while ($rows = mysqli_fetch_array($result)){
    $name = $rows['name'];
    $genre = $rows['genre'];
    $img = $rows['img'];
    $description = $rows['description'];

    $sqlQuery = 'SELECT `sessionTime` FROM `session_time` WHERE (`session_time`.`idFilm` = ' . $rows["id"] . ');';
    $session = mysqli_query($connection, $sqlQuery);
    $i = 1;
    while ($rows2 = mysqli_fetch_array($session)){
      if ($i==1){
        $sessionTime1= $rows2["sessionTime"];
      }
      if ($i==2){
        $sessionTime2= $rows2["sessionTime"];
      }
      $i = $i + 1;
    }
  }
?>
  <main>
    <section id="changes-form-section">
      <form action="supportfiles/changeFilmProcess.php" method="post" class="formProcess">
        <input type="text" name="idFilm" value="<?php echo $idFilm ?>" style="display: none;">
        <input type="text" name="idSession1" value="<?php echo $idSession1 ?>" style="display: none;">
        <input type="text" name="idSession2" value="<?php echo $idSession2 ?>" style="display: none;">
        <h3>Форма изменения фильма</h3>
        <p>
          <label>Название фильма:<br></label>
          <input name="name" type="text" size="15" maxlength="15" value="<?php echo $name?>">
        </p>
        <p>
          <label>Жанры:<br></label>
          <input name="genre" type="text" size="15" maxlength="40" value="<?php echo $genre?>">
        </p>
        <p>
          <label>Картинка:<br></label>
          <input name="img" type="file" size="15" maxlength="15">
          <img src="res/film/<?php echo $img?>" alt="<?php echo $img?>">
        </p>
        <p>
          <label>Описание:<br></label>
          <textarea name="description" cols="50" rows="10"><?php echo $description?></textarea>
        </p>
          <!-- <p>
            <label>Первый сеанс:<br></label>
            <input type="datetime-local" name="session_time1" value="$sessionTime1?">
          </p>
          <p>
            <label>Второй сеанс:<br></label>
            <input type="datetime-local" name="session_time2" value="$sessionTime2?">
          </p> -->
        <p><input type="submit" name="clac" value="Изменить"></p>
      </form>
    <a href="tableFilm.php" class='btnCh'>Назад</a>
  </section>
  </main>

<?php include 'footer.php' ?>
