<?php

  include('config.php');

  $idFilm = $_GET['idFilm'];
  $q1 = "DELETE FROM session_time WHERE `session_time`.`idFilm` = '$idFilm'";
  $q3 = "DELETE FROM comment WHERE `comment`.`idFilm` = '$idFilm'";
  $q2 = "DELETE FROM films WHERE `films`.`id` = '$idFilm'";

  $result = mysqli_query($connection, $q3);
  $result = mysqli_query($connection, $q1);
  $result = mysqli_query($connection, $q2);

  header("Location:../tableFilm.php");

?>
