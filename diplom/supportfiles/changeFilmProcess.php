<?php

  include('config.php');

  $name = $_POST['name'];
  $genre = $_POST['genre'];
  $img = $_POST['img'];
  $description = $_POST['description'];
  $id = $_POST['idFilm'];

  $q = "UPDATE `films` SET `name` = '$name', `genre` = '$genre', `img` = '$img', `description` = '$description' WHERE `films`.`id` = '$id'";
  $result = mysqli_query($connection, $q);

  header("Location:../tableFilm.php");
?>
