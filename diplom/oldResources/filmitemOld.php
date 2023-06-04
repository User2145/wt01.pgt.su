<?php include 'header.php' ?>
  <main>
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
      }


      echo '
      <section id="film-item">

        <img src="res/film/' . $row['img'] . '" class="film-item-image">
        <div class="film-item-block">
          <h1>' . $row['name'] . '</h2>
          <p class="film-item-description">' . $row['description'] . '</p>
          <a href="">Заказать билет</a>
        </div>

      ';
      $sql = mysqli_query($connection, 'SELECT `comment`.`comment`, `users`.`name` FROM `comment`, `films`, `users` WHERE `comment`.`idFilm` = ' . $idFilm . ' and `comment`.`idUser` = `users`.`id` and `films`.`id`= ' . $idFilm . ';');
      while ($result2 = mysqli_fetch_array($sql)) {
        if($_SESSION['users']['type'] == '1' OR $_SESSION['users']['type'] == '2'){
          $deleteBTN = '<a href=""><img src="res/delete.png" alt="Удалить комментарий"></a>';
        }
        else {
          $deleteBTN = '';
        }
        echo '<div class="film-comment-block">
                <p class="film-comment-username">' . $result2["name"] . ': </p>
                <p class="film-comment">' . $result2["comment"] . '</p>
                ' . $deleteBTN . '
              </div>';
      }
      echo  '<form class="film-comment-form">
          <input class="comment-field" type="text" name="comment" required>
          <input class="comment-field" type="submit" value="Отправить" name="input"></input>
        </form>
      </section>';
    ?>
    <!-- <section id="film-item">

      <img src="res/film/1.jpg" class="film-item-image">
      <div class="film-item-block">
        <h1>Бесславные ублюдки</h2>
        <p class="film-item-description">Это первый год оккупации Франции Германией. Офицер союзников лейтенант Альдо Рейн (Брэд Питт) собирает команду еврейских солдат для совершения жестоких актов возмездия нацистам, включая снятие их скальпов. Он и его люди объединяют усилия с Бриджет фон Хаммерсмарк, немецкой актрисой и тайным агентом, чтобы уничтожить лидеров Третьего рейха. Их судьбы сходятся с судьбой владелицы театра Шосанны Дрейфус, которая стремится отомстить нацистам за казнь своей семьи.</p>
        <a href="">Заказать билет</a>
      </div>
      <div class="film-comment-block">
        <p class="film-comment-username">Ольга В.</p>
        <p class="film-comment">Очень интересный фильм!</p>
      </div>
      <form class="film-comment-form">
        <input class="comment-field" type="text" name="comment" required>
        <input class="comment-field" type="submit" value="Отправить" name="input"></input>
      </form>
    </section> -->
  </main>
<?php include 'footer.php' ?>
