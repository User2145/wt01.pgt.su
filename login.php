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
        <form method="post" action="supportfiles/autorizProcess.php" class="formProcess">
          <h2>Авторизация</h2><br>
          <label for="username">Логин</label><br>
          <input type="text" name="username" required><br><br>
          <label for="password">Пароль</label><br>
          <input type="password" name="password" required><br><br>
          <input type="submit" value="Войти" name="input"></input><br>
          <p>Не зарегистрированы? <a href="registration.php">Зарегистрироваться</a></p>
        </form>
      </main>
  </div>
</body>
</html>
