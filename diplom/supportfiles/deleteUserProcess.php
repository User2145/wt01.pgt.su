<?php

  include('config.php');

  $id = $_GET['idUser'];
  $q = "DELETE FROM users WHERE `users`.`id` = '$id'";

  $result = mysqli_query($connection, $q);

  header("Location: ../tableUser.php");

?>
