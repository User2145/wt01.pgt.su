<?php
include('config.php');
// if (isset($_POST["clac"])) {
//   $login = $_POST['login'];
//   $password = $_POST['password'];
//   $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
//
//   $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
//
//   if(mysqli_num_rows($result) ==1) {
//     $user = mysqli_fetch_assoc($result);
//     $_SESSION['users']['id'] = $user['id'];
//     $_SESSION['users']['login'] = $user['login'];
//     $_SESSION['users']['password'] = $user['password'];
//     $_SESSION['users']['name'] = $user ['name'];
//     header("Location:../index.php");
//   }
//   else{
//     $_SESSION['error'] = "Неверный логин или пароль";
//     header("Location:../login.php");
//   }
// }
// // выход из сессиии
// if (isset($_POST['porn'])) {
//   unset($_SESSION['users']);
//   session_destroy();
//   header("Location: ../login.php");
// }
//registaciya
if(isset($_POST['clac'])){
  $login = $_POST['login'];
  $pass = $_POST['password'];
  $word = $_POST['password2'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $_SESSION['timeLogin'] = $login;
  $_SESSION['timePass'] = $pass;
  $_SESSION['timeWord'] = $word;
  if($pass === $word){
    if(mysqli_num_rows(mysqli_query($connection, "SELECT * FROM users WHERE login = '$login'")) == 0){
      $pass = $pass;
      $q = "INSERT INTO users(login, password, email, name, type) VALUES ('$login', '$pass', '$email', '$name', 3)";
      $result = mysqli_query($connection, $q);
      header("Location:../../login.php");
    }
    else{
      $_SESSION['error'] = "Пользователь с таким логиным уже сужествует, введите другой логин!";
      unset($_SESSION['timeLogin']);
      header("Location:../../registration.php");
    }
  }
  else{
    $_SESSION['error'] = "Пароли не совпадают!";
    unset($_SESSION['timePass']);
    unset($_SESSION['timeWord']);
    header("Location:../../registration.php");

  }
}
?>
