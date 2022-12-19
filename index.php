<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <?php include 'header.php' ?>

  <main>
    <div class="contmain">
      <?php
        include("supportfiles/config.php");
        $sql = mysqli_query($connection, 'SELECT * FROM `films`');
        foreach ($sql as $row){
          echo '
            <div class="blog">
            <a href="order.php?idFilm=' . $row["id"] . '&idPlace=0"><img src=res/film/' . $row["img"] . '></a>
            <p class="genre">' . $row["name"] . '</p>
            <p class="genre">' . $row["genre"] . '</p>
            <a href="order.php?idFilm=' . $row["id"] . '&idPlace=0" class="orderbutton">Сеансы</a>
            </div>';
        };
      ?>
    </div>
  </main>

    <?php include 'footer.php' ?>
</body>
</html>
