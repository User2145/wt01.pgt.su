<?php

  include('config.php');

  $id = $_GET['idNews'];
  $q = "DELETE FROM news WHERE `news`.`id` = '$id'";

  $result = mysqli_query($connection, $q);

  header("Location: ../tableNews.php");

?>
