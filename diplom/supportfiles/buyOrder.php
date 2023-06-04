<?php

  include('config.php');

  $idSession_time = $_POST['session'];
  $places = explode('-', $_POST['place']);
  $col = $places[0];
  $place = $places[1];
  $email = $_POST['email'];
  $tel = $_POST['tel'];

  $q = "INSERT INTO orders(idSession_time, place, col, email, tel) VALUES ('$idSession_time', '$place', '$col', '$email', '$tel')";
  $result = mysqli_query($connection, $q);

  header("Location: ../index.php");

?>
