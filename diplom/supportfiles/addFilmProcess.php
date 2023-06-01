<?php

  include('config.php');

  $name = $_POST['name'];
  $genre = $_POST['genre'];
  $img = $_POST['img'];
  $description = $_POST['description'];

  $q = "INSERT INTO films(name, genre, img, description) VALUES ('$name', '$genre', '$img', '$description')";
  $result = mysqli_query($connection, $q);

  header("Location: ../addFilm.php");

?>
