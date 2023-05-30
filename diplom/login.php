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
    <section id="login-form">

      <form method="post" action="supportfiles/autorizProcess.php" class="formProcess">
        <a href="index.php" id="back-url">< Назад</a>
        <h2>Вход</h2><br>
        <label for="username">Логин</label><br>
        <input class="text-field" type="text" name="username" required><br><br>
        <label for="password">Пароль</label><br>
        <input class="text-field" type="password" name="password" required><br><br>
        <input class="text-field" type="submit" value="Войти" name="input"></input><br>
        <p>Не зарегистрированы? <a href="registration.php" id="registration-url">Зарегистрироваться</a></p>
      </form>

    </section>
  </main>
</body>
</html>
