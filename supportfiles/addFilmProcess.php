<?php

  include('config.php');

  $name = $_POST['name'];
  $genre = $_POST['genre'];
  $img = $_POST['img'];

  $q = "INSERT INTO films(name, genre, img) VALUES ('$name', '$genre', '$img')";
  $result = mysqli_query($connection, $q);
  $q = "SELECT * FROM films WHERE name = '$name' AND genre = '$genre'";
  $result = mysqli_query($connection, $q);
  $film = mysqli_fetch_assoc($result);

  $filmId = $film['id'];
  $session_time1 = $_POST['session_time1'];
  $session_time2 = $_POST['session_time2'];

  $q = "INSERT INTO session_time(sessionTime, idFilm) VALUES ('$session_time1', '$filmId')";
  $result = mysqli_query($connection, $q);
  $q = "INSERT INTO session_time(sessionTime, idFilm) VALUES ('$session_time2', '$filmId')";
  $result = mysqli_query($connection, $q);
  header("Location:../../addFilm.php");

?>
