<?php

  include('config.php');

  $idComment = $_GET['idComment'];
  $q = "DELETE FROM comment WHERE `comment`.`id` = '$idComment'";

  $result = mysqli_query($connection, $q);

  header("Location:../index.php");

?>
