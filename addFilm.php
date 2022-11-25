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
  <?php include("header.php") ?>
  <div class="boxy">
      <main>
        <form action="supportfiles/addFilmProcess.php" method="post">
          <p>
            <label>Название фильма:<br></label>
            <input name="name" type="text" size="15" maxlength="15">
          </p>
          <p>
            <label>Жанры:<br></label>
            <input name="genre" type="text" size="15" maxlength="40">
          </p>
          <p>
            <label>Картинка:<br></label>
            <input name="img" type="file" size="15" maxlength="15">
          </p>
          <p>
            <label>Первый сеанс:<br></label>
            <input type="datetime-local" name="session_time1" value="2017-06-01">
          </p>
          <p>
            <label>Второй сеанс:<br></label>
            <input type="datetime-local" name="session_time2" value="2017-06-01">
          </p>
          <p><input type="submit" name="clac" value="Добавить"></p>
        </form>
      </main>
  </div>
</body>
</html>
