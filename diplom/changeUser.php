<?php include("header.php") ?>
<?php
  $idUser = $_GET['idUser'];
  $sqlQuery = "SELECT * FROM `users` WHERE `users`.`id` = '$idUser' ;";
  global $connection;
  $result = mysqli_query($connection, $sqlQuery);
  while ($rows = mysqli_fetch_array($result)){
    $login = $rows['login'];
    $password = $rows['password'];
    $name = $rows['name'];
    $email = $rows['email'];
    $type = $rows['type'];
  }?>
<main>
  <section id="changes-form-section">
    <form action="supportfiles/changeUserProcess.php" method="post" class="formProcess">
      <h3>Форма изменения пользователя</h3>
      <p>
        <label>Логин:<br></label>
        <input name="login" type="text" size="15" maxlength="15" value="<?php echo $login ?>">
      </p>
      <p>
        <label>Пароль:<br></label>
        <input name="password" type="text" size="15" maxlength="40" value="<?php echo $password ?>">
      </p>
      <p>
        <label>Имя:<br></label>
        <input name="name" type="text" size="15" maxlength="40" value="<?php echo $name ?>">
      </p>
      <p>
        <label>Почта:<br></label>
        <input name="email" type="text" size="15" maxlength="40" value="<?php echo $email ?>">
      </p>
      <p>
        <label>Тип:<br></label>
        <?php
          if ($type==1){
            echo '
            <select name="type">
              <option value="1">Администратор<option>
              <option value="2">Модератор<option>
              <option value="5">Пользователь<option>
            </select>';
          }
          else if ($type==2){
            echo '
            <select name="type">
              <option value="2">Модератор<option>
              <option value="1">Администратор<option>
              <option value="5">Пользователь<option>
            </select>';
          }
          else {
            echo '
            <select name="type">
              <option value="5">Пользователь<option>
              <option value="2">Модератор<option>
              <option value="1">Администратор<option>
            </select>';
          }
        ?>
      </p>
      <input name="id" type="hidden" size="15" value="<?php echo $idUser ?>">
      <p><input type="submit" name="clac" value="Изменить"></p>
    </form>
  </section>
</main>
<?php include 'footer.php' ?>
