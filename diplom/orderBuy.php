<?php include 'header.php' ?>
<?php
  include('supportfiles/config.php');
  $idFilm = $_GET['idFilm'];

  $q = 'SELECT * FROM `films` WHERE films.id = ' . $idFilm . ';';
  $result = mysqli_query($connection, $q);

  foreach($result as $row){
    $name[] = $row['name'];
    $genre[] = $row['genre'];
    $img[] = $row['img'];
    $description[] = $row['description'];
  } ?>
  <main>
    <section id="order-buy-form">
      <h2>Фильм "<?php echo $row['name']; ?>"</h2>
      <img src="res/film/<?php echo $row['img']; ?>" id="order-buy-form-image-film">
      <form action="supportfiles/buyOrder.php" method="post" class="formProcess">
        <?php
          include("supportfiles/config.php");
          $queue = "SELECT * FROM `session_time` WHERE `session_time`.`idFilm`='$idFilm'";
          $sql = mysqli_query($connection, $queue);
          foreach ($sql as $row){
            $sessionTime = str_replace('T', ' ', $row['sessionTime']);
            echo '
              <input id="session' . $row['id'] . '" name="session" type="radio" value="' . $row['id'] . '">
              <label for="session' . $row['id'] . '">' . $sessionTime . '</label>
              ';
          };
        ?>
        <br><label>Место в зале:<br></label><br>
        <img src="res/display.png" id="order-buy-form-image-display">
        <table>
          <?php
          $q = 'SELECT * FROM `orders` WHERE `orders`.`idSession_time` = 6;';
          $resultOrders = mysqli_query($connection, $q);



            $i = 1; //Ряды
            while ($i <= 7) {
              echo '<tr class="order-buy-form-tr">';
              $j = 1; //Места
              while ($j <= 23) {

                foreach($resultOrders as $row){
                  if ($i == $row["col"] AND $j == $row["place"]){
                    echo '<td class="order-buy-form-td"><img src="res/place.png" width="14"></td>';
                  }
                  else {
                    echo '<td class="order-buy-form-td"><input name="place" type="radio" value="' . $i . '-' . $j . '"></td>';
                  }
                }


                $j = $j + 1;
              }
              echo '</tr>';
              $i = $i + 1;
            }
          ?>
        </table>
        <div id="order-buy-form-text-fields">
          <p>
            <label>Ваша электронная почта:<br></label>
            <input class="order-buy-field" name="email" type="text" size="15" maxlength="15">
          </p>
          <p>
            <label>Ваш номер телефона:<br></label>
            <input class="order-buy-field" name="tel" type="text" size="15" maxlength="15">
          </p>
          <p><input class="order-buy-field" type="submit" name="clac" value="Заказать"></p>
        <div>
      </form>
    </section>
  </main>
<?php include 'footer.php' ?>
