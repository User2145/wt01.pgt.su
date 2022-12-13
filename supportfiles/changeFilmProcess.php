<?php

  include('config.php');

  $name = $_POST['name'];
  $genre = $_POST['genre'];
  $img = $_POST['img'];
  $id = $_POST['idFilm'];
  $sessionTime1 = $_POST['session_time1'];
  $sessionTime2 = $_POST['session_time2'];

  $q = "UPDATE `films` SET `name` = '$name', `genre` = '$genre', `img` = '$img' WHERE `films`.`id` = '$id'";
  $result = mysqli_query($connection, $q);
  $q = "SELECT * FROM films WHERE name = '$name' AND genre = '$genre'";
  $result = mysqli_query($connection, $q);
  $film = mysqli_fetch_assoc($result);

  $idSession1 = $_POST['idSession1'];
  $idSession2 = $_POST['idSession2'];

  $q = "UPDATE `session_time` SET `sessionTime` = '$sessionTime1' WHERE `session_time`.`id` = '$idSession1'";
  $result = mysqli_query($connection, $q);
  $q = "UPDATE `session_time` SET `sessionTime` = '$sessionTime2' WHERE `session_time`.`id` = '$idSession2'";
  $result = mysqli_query($connection, $q);

  header("Location:../../filmForm.php");
?>
