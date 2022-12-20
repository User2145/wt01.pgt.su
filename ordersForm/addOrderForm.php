<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP</title>
  <link rel="stylesheet" href="/styles/styles.css">
</head>
<body>
  <?php include("/header.php") ?>
  <div class="boxy">
      <main>
        <form action="supportfiles/addFilmProcess.php" method="post" class="formProcess">
          <p>
            <label>Место:<br></label>
            <input name="place" type="text" size="15" maxlength="15">
          </p>
          <p>
            <label>Карта:<br></label>
            <input name="card" type="text" size="15" maxlength="40">
          </p>
          <p>
            <label>Фильм:<br></label>
            <input name="film" type="text" size="15" maxlength="40">
          </p>
          <p>
            <label>Пользователь:<br></label>
            <input type="datetime-local" name="session_time1" value="2017-06-01">
          </p>
          <p>
            <label>Дата:<br></label>
            <input type="datetime-local" name="session_time2" value="2017-06-01">
          </p>
          <p><input type="submit" name="clac" value="Добавить"></p>
        </form>
        <a href="orderForm.php" class='btnCh'>Назад</a>
      </main>
  </div>
</body>
</html>
