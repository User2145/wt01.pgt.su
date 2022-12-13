<footer>
  <p>Меню</p>
  <ul>
      <li><a href="index.php" class="hvr-underline-from-center">Киноафиша</a></li>
      <li><a href="news.php" class="hvr-underline-from-center">Новости</a></li>
      <?php
        include("supportfiles/config.php");
        if (isset($_SESSION['users']['login'])){
          echo "<li><a href='techsupport.php' class='hvr-underline-from-center'>Связаться с техподдержкой</a></li>";
        }
      ?>

      <?php
        include("supportfiles/config.php");
        if (isset($_SESSION['users']['login'])){
          echo "<li><a href='../clientForm.php' class='hvr-underline-from-center'>Личный Кабинет</a></li>";
        }
      ?>
      <?php
        include("supportfiles/config.php");
        if (!isset($_SESSION['users']['login'])){
          echo "<li><a href='login.php' class='hvr-underline-from-center'>Авторизация</a></li>";
        }
      ?>
      <li><a href="aboutus.php" class="hvr-underline-from-center">О нас</a></li>
  </ul>
</footer>
