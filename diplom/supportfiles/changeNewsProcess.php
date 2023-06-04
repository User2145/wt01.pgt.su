<?php

  include('config.php');

  $name = $_POST['title'];
  $dateCreate = $_POST['dateCreate'];
  $dateCreate = date("d.m.Y",strtotime($dateCreate));
  $image = $_POST['image'];
  $description = $_POST['description'];
  $id = $_POST['idNews'];

  $q = "UPDATE `news` SET `title` = '$title', `dateCreate` = '$dateCreate', `image` = '$image', `description` = '$description' WHERE `news`.`id` = '$id'";
  $result = mysqli_query($connection, $q);

  header("Location: ../changeNews.php");
?>
