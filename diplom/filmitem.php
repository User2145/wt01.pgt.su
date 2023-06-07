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
    <section id="film-item">
      <?php
      if(isset($_SESSION['users']['type'])){
        echo '
        <div class="film-item-block">
          <img src="res/film/' . $row['img'] . '" alt="Фильм" class="film-item-image">
          <p>' . $row['genre'] . '</p>
          <h2>' . $row['name'] . '</h2>
          <p class="film-item-description">' . $row['description'] . '</p>
          <a href="orderBuy.php?idFilm=' . $idFilm . '" class="film-form-url">Заказать билет</a>
        </div>
        ';
      }
      else if(!isset($_SESSION['users']['type'])){
        echo '
        <div class="film-item-block">
          <img src="res/film/' . $row['img'] . '" alt="Фильм" class="film-item-image">
          <p>' . $row['genre'] . '</p>
          <h2>' . $row['name'] . '</h2>
          <p class="film-item-description">' . $row['description'] . '</p>
          <a href="login.php" class="film-form-url">Авторизируйтесь чтобы заказать билет</a>
        </div>
        ';
      }
      ?>
      <div class="comment-block">
        <h3>Комментарии</h3>
        <?php $sql = mysqli_query($connection, 'SELECT `comment`.`id`, `comment`.`comment`, `users`.`name` FROM `comment`, `films`, `users` WHERE `comment`.`idFilm` = ' . $idFilm . ' and `comment`.`idUser` = `users`.`id` and `films`.`id`= ' . $idFilm . ';');
        if($_SESSION['users']['type'] == '1' OR $_SESSION['users']['type'] == '2'){
          $deleteBTN = '<img src="res/delete.png" alt="Удалить комментарий">';
          $buttonComment = '<input class="comment-field" type="submit" value="Отправить" name="input"></input>';
          $commentField= '<input class="comment-field" type="text" name="comment" required>';
        }
        else if (!isset($_SESSION['users']['login'])){
          $deleteBTN = '';
          $buttonComment = '';
          $commentField= '';
        }
        else {
          $deleteBTN = '';
          $buttonComment = '<input class="comment-field" type="submit" value="Отправить" name="input"></input>';
          $commentField= '<input class="comment-field" type="text" name="comment" required>';
        }
        while ($result2 = mysqli_fetch_array($sql)) {
          echo '<div class="film-comment-block">
                  <p class="film-comment-username">' . $result2["name"] . ': </p>
                  <p class="film-comment">' . $result2["comment"] . '</p>
                  <a href="supportfiles/commentDelete.php?idComment=' . $result2["id"] . '">' . $deleteBTN . '</a>
                </div>';
        }
        echo  '<form class="film-comment-form" action="supportfiles/commentAdd.php" method="post">
            <input type="text" name="film" value="' . $_GET['idFilm'] . '" hidden>
            ' . $commentField . '
            ' . $buttonComment . '
            ' . $buttonLogin . '
          </form>
        </section>';
      ?>
      </div>
    </section>
  </main>
<?php include 'footer.php' ?>
