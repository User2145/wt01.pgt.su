<?php

  include('config.php');

  $idUser = $_GET['idUser'];
  $q1 = "DELETE FROM orders WHERE `orders`.`idUser` = '$idUser'";
  $q2 = "DELETE FROM massages WHERE `massages`.`idUser` = '$idUser'";
  $q3 = "DELETE FROM users WHERE `users`.`id` = '$idUser'";

  $result = mysqli_query($connection, $q1);
  $result = mysqli_query($connection, $q2);
  $result = mysqli_query($connection, $q3);

  header("Location:../../userForm.php");

?>
