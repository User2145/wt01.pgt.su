<?php

  include('config.php');

  $idFilm = $_POST['idFilm'];
  $sessionTime = $_POST['sessionTime'];

  $q = "INSERT INTO session_time(sessionTime, idFilm) VALUES ('$sessionTime', '$idFilm')";
  $result = mysqli_query($connection, $q);

  header("Location: ../addSession.php");

?>
