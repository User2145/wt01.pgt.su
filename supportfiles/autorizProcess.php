<?php
include('config.php');
if (isset($_POST["input"])) {
  $login = $_POST['username'];
  $password = ($_POST['password']);
  $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";

  $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
  if(mysqli_num_rows($result) ==1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['users']['id'] = $user['id'];
    $_SESSION['users']['login'] = $user['login'];
    $_SESSION['users']['password'] = $user['password'];
    $_SESSION['users']['name'] = $user['name'];
    $_SESSION['users']['email'] = $user['email'];
    $_SESSION['users']['type'] = $user['type'];
    $_SESSION['error1'] = "успешно";
    header("Location:../../index.php");
  }
  else{
    $_SESSION['error'] = "Неверный логин или пароль";

    header("Location:../../login.php");
  }
}
?>
