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
    <div class="btnpages">
      <form action="index.php" method="get">
        <a href="?id=1">1</a>
        <a href="?id=2">2</a>
      </form>
    </div>
    <div class="contmain">
      <?php
        $var = 1;
        if (isset($_GET['id'])){
          if ($_GET['id']==1){
            $var=1;
          }
          if ($_GET['id']==2){
            $var=2;
          }
        }

        if ($var == 1){

            include("supportfiles/config.php");
            $sql = mysqli_query($connection, 'SELECT * FROM `films`');
            foreach ($sql as $row){
              echo '
              <div class="blog">
                <a href="order.php?idFilm=' . $row["id"] . '"><img src=res/film/' . $row["img"] . '></a>
                <p class="genre">' . $row["name"] . '</p>
                <p class="genre">' . $row["genre"] . '</p>
                <a href="order.php?id=' . $row["id"] . '" class="orderbutton">Сеансы</a>
              </div>';
            };

        }
      ?>
    </div>
    <div class="btnpages">
      <form action="index.php" method="get">
        <a href="?id=1">1</a>
        <a href="?id=2">2</a>
      </form>
    </div>
  </main>

    <?php include 'footer.php' ?>
</body>
</html>
