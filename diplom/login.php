<?php include 'header.php' ?>
  <main>
    <section id="login-form">

      <form method="post" action="supportfiles/loginProcess.php" class="formProcess">
        <h2>Вход</h2><br>
        <label for="username">Логин</label><br>
        <input class="text-field" type="text" name="username" required><br><br>
        <label for="password">Пароль</label><br>
        <input class="text-field" type="password" name="password" required><br><br>
        <input class="text-field" type="submit" value="Войти" name="input"></input><br>
        <p>Не зарегистрированы? <a href="registration.php" id="registration-url">Зарегистрироваться</a></p>
      </form>


    </section>
    <?php
      $i = 0;
      while ($i < 30) {
        $i = $i + 1;
        echo '<br>';
      }
    ?>
  </main>
<?php include 'footer.php' ?>
