<?php
  include('config.php');
  if(isset($_SESSION['users']['login'])){
    $idFilm = $_POST['idFilm'];
    $card = $_POST['card'];
    $idUser = $_SESSION['users']['id'];
    $idSession_time = $_POST['idSession_time'];
    $place = 1;

    $q = "INSERT INTO orders(place, card, idFilm, idUser, idSession_time) VALUES ('$place', '$card', '$idFilm', '$idUser', '$idSession_time')";
    $result = mysqli_query($connection, $q);
    header("Location:../../index.php");
  }
  else{

    header("Location:../../login.php");

  }

?>
