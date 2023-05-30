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
    <section id="registration-form">

      <form method="post" action="supportfiles/registProcess.php" class="formProcess">
        <a href="index.php" id="back-url">< Назад</a>
        <h2>Регистрация</h2><br>
        <p>
          <label>Ваш логин:<br></label>
          <input class="text-field" name="login" type="text" size="15" maxlength="15">
        </p>
        <p>
          <label>Ваша электронная почта:<br></label>
          <input class="text-field" name="email" type="text" size="15" maxlength="15">
        </p>
        <p>
          <label>Ваше имя:<br></label>
          <input class="text-field" name="name" type="text" size="15" maxlength="15">
        </p>
        <p>
          <label>Ваш пароль:<br></label>
          <input class="text-field" name="password" type="password" size="15" maxlength="15">
        </p>
        <p>
          <label>Подтверждение пароля:<br></label>
          <input class="text-field" name="password2" type="password" size="15" maxlength="15">
        </p>
        <p><input class="text-field" type="submit" name="clac" value="Зарегистрироваться"></p>
      </form>

    </section>
  </main>
</body>
</html>
