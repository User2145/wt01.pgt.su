<?php

  include("config.php");

  $user = $_SESSION['users']['id'];


  $comment = $_POST['comment'];
  $idFilm = $_POST['film'];

  $q = "INSERT INTO comment(idFilm, idUser, comment) VALUES ('$idFilm', '$user', '$comment')";
  $result = mysqli_query($connection, $q);

  header("Location: ../filmitem.php?idFilm=" . $idFilm . "");

?>
