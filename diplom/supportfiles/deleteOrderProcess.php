<?php

  include('config.php');

  $id = $_GET['idOrder'];
  $q = "DELETE FROM orders WHERE `orders`.`id` = '$id'";

  $result = mysqli_query($connection, $q);

  header("Location: ../tableOrder.php");

?>
