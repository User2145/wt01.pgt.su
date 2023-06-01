<?php include("header.php") ?>
<main>
  <section id="changes-form-section">
    <form action="supportfiles/addUserProcess.php" method="post" class="formProcess">
      <h3>Форма добавления пользователя</h3>
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
          <option value="5">Пользователь<option>
        </select>
      </p>
      <p><input type="submit" name="clac" value="Добавить"></p>
    </form>
    <a href="tableUser.php" class='btnCh'>Назад</a>
  </section>
</main>
<?php include 'footer.php' ?>
