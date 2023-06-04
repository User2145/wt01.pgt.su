<?php include 'header.php' ?>
  <main>
    <section id="registration-form">

      <form method="post" action="supportfiles/registrationProcess.php" class="formProcess">
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
    <?php
      $i = 0;
      while ($i < 40) {
        $i = $i + 1;
        echo '<br>';
      }
    ?>
  </main>
<?php include 'footer.php' ?>
