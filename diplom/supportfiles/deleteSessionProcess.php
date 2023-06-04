<?php

  include('config.php');

  $id = $_GET['idSession'];
  $q = "DELETE FROM `session_time` WHERE `session_time`.`id` = '$id'";

  $result = mysqli_query($connection, $q);

  header("Location: ../tableSession.php");

?>
