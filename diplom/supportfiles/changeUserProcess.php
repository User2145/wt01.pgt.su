<?php

  include('config.php');

  $id = $_POST['id'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $type = $_POST['type'];

  $q = "UPDATE `users` SET `login` = '$login', `password` = '$password', `name` = '$name', `email` = '$email', `type` = '$type' WHERE `users`.`id` = '$id'";
  $result = mysqli_query($connection, $q);

  header("Location: ../changeUser.php");

?>
