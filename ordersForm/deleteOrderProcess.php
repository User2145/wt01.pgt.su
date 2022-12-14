<?php

  include('../supportfiles/config.php');

  $id = $_GET['id'];
  $q1 = "DELETE FROM orders WHERE `orders`.`id` = '$id' ";

  $result = mysqli_query($connection, $q1);

  header("Location: orderForm.php?action=0");

?>
