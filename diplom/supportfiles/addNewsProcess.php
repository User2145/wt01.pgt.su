<?php

  include('config.php');

  $title = $_POST['title'];
  $dateCreate = $_POST['dateCreate'];
  $dateCreate = date("d.m.Y",strtotime($dateCreate));
  $image = $_POST['image'];
  $description = $_POST['description'];

  $q = "INSERT INTO news(title, dateCreate, image, description) VALUES ('$title', '$dateCreate', '$image', '$description')";
  $result = mysqli_query($connection, $q);


  header("Location: ../addNews.php");

?>
