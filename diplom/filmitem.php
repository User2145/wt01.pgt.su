<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Вселенная кино</title>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <main>
    <a href="index.php" id="back-url-film">< Назад</a>
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
        <div class="film-comment-block">
          <p class="film-comment-username">Ольга В.</p>
          <p class="film-comment">Очень интересный фильм!</p>
        </div>
        <form class="film-comment-form">
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
</body>
</html>
