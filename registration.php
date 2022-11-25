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
        <form action="supportfiles/registProcess.php" method="post">
          <h2>Регистрация</h2><br>
          <p>
            <label>Ваш логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
          </p>
          <p>
            <label>Ваша электронная почта:<br></label>
            <input name="email" type="text" size="15" maxlength="15">
          </p>
          <p>
            <label>Ваше имя:<br></label>
            <input name="name" type="text" size="15" maxlength="15">
          </p>
          <p>
            <label>Ваш пароль:<br></label>
            <input name="password" type="password" size="15" maxlength="15">
          </p>
          <p>
            <label>Подтверждение пароля:<br></label>
            <input name="password2" type="password" size="15" maxlength="15">
          </p>
          <p><input type="submit" name="clac" value="Зарегистрироваться"></p>
        </form>
      </main>
  </div>
</body>
</html>
