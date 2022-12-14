<?php
  include('config.php');
  if(isset($_SESSION['users']['login'])){
    $idFilm = $_POST['idFilm'];
    $card = $_POST['card'];
    $idUser = $_SESSION['users']['id'];
    $idSession_time = $_POST['idSession_time'];
    $day = date('jS');
    $month = date('F');
    $year = date('Y');
    $place = $_POST['place'];

    $q = "INSERT INTO orders(place, card, idFilm, idUser, idSession_time, day, month, year) VALUES ('$place', '$card', '$idFilm', '$idUser', '$idSession_time', '$day', '$month', '$year')";
    $result = mysqli_query($connection, $q);
    header("Location:../../index.php");
  }
  else{

    header("Location:../../login.php");

  }

?>
