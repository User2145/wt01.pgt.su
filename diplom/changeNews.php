<?php include("header.php") ?>
<?php
  $idNews = $_GET['idNews'];
  $q = "SELECT * FROM news WHERE `news`.`id` = '$idNews' ";
  $result = mysqli_query($connection, $q);
  while ($rows = mysqli_fetch_array($result)){
    $title = $rows['title'];
    $dateCreate = $rows['dateCreate'];
    $dateCreate = date("Y-m-d",strtotime($dateCreate));
    $image = $rows['image'];
    $description = $rows['description'];
  }
?>
<main>
  <section id="changes-form-section">
    <form action="supportfiles/changeNewsProcess.php" method="post" class="formProcess">
      <h3>Форма добавления фильма</h3>
      <p>
        <label>Заголовок новости:<br></label>
        <input name="title" type="text" size="15" value="<?php echo $title;?>">
      </p>
      <p>
        <label>Дата:<br></label>
        <input type="date" name="dateCreate" value="<?php echo $dateCreate;?>">
      </p>
      <p>
        <label>Картинка:<br></label>
        <input name="image" type="file" size="15" maxlength="15">
      </p>
      <p>
        <label>Описание:<br></label>
        <textarea name="description" cols="50" rows="10" maxlength = "10000"><?php echo $description;?></textarea>
      </p>
      <input name="id" type="hidden" value="<?php echo $idNews;?>">
      <p><input type="submit" name="clac" value="Изменить"></p>
    </form>
  </section>
</main>
<?php include 'footer.php' ?>
