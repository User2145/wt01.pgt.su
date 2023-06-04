<?php

  include('config.php');

  $login = $_POST['login'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $type = $_POST['type'];

  $q = "INSERT INTO users(login, password, name, email, type) VALUES ('$login', '$password', '$name', '$email', '$type')";
  $result = mysqli_query($connection, $q);

  header("Location: ../addUser.php");

?>
