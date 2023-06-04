<?php

  include('config.php');

  $idFilm = $_POST['idFilm'];
  $sessionTime = $_POST['sessionTime'];
  $id = $_POST['id'];

  $q = "UPDATE `session_time` SET `sessionTime` = '$sessionTime', `idFilm` = '$idFilm' WHERE `session_time`.`id` = '$id';";
  $result = mysqli_query($connection, $q);

  header("Location: ../changeSession.php");

?>
