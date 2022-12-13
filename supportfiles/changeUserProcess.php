<?php

  include('config.php');

  $login = $_POST['login'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $type = $_POST['type'];
  $id = $_POST['id'];

  $q = "UPDATE `users` SET `login` = '$login', `password` = '$password', `email` = '$email', `type` = '$type' WHERE `users`.`id` = '$id'";
  $result = mysqli_query($connection, $q);

  header("Location:../../addUser.php");
?>
