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
        <form action="supportfiles/addUserProcess.php" method="post">
          <p>
            <label>Логин:<br></label>
            <input name="login" type="text" size="15" maxlength="15">
          </p>
          <p>
            <label>Пароль:<br></label>
            <input name="password" type="text" size="15" maxlength="40">
          </p>
          <p>
            <label>Имя:<br></label>
            <input name="name" type="text" size="15" maxlength="40">
          </p>
          <p>
            <label>Почта:<br></label>
            <input name="email" type="text" size="15" maxlength="40">
          </p>
          <p>
            <label>Тип:<br></label>
            <select name="type">
              <option value="2">Модератор<option>
              <option value="1">Администратор<option>
              <option value="3">Пользователь<option>
            </select>
          </p>
          <p><input type="submit" name="clac" value="Добавить"></p>
        </form>
        <a href="userForm.php" class='btnCh'>Назад</a>
      </main>
  </div>
</body>
</html>
