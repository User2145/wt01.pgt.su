<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <?php include 'header.php' ?>

  <main>
    <form class="techsupport" action="techsupport.php" method="post">
      <h3>Чат с техподдержкой</h3>
      <div class="dialog">

      </div>
      <p>Сообщение</p>
      <textarea cols="40" rows="3" name="massage"></textarea>
      <input type="submit" value="Отправить">
    </form>
  </main>
  <?php
    $massage = $_POST["massage"];
    $idUser = $_SESSION["id"];
    $idManager = 3;
    $q = "INSERT INTO massages(massage, idUser, idManager, direction) VALUES ('$massage', '$idUser', 'idManager', '1')";
    $result = mysqli_query($connection, $q);
  ?>
  <?php include 'footer.php' ?>
</body>
</html>
