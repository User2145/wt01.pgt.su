<?php include 'header.php' ?>

<main>
  <section id="cabinet-section">
    <ul id="cabinet-url-list">
      <h2>Личный кабинет</h2>
      <?php
        include("supportfiles/config.php");
        if ($_SESSION['users']['type'] == 1){
          echo '
          <li class="cabinet-url-item"><a href="tableFilm.php">Фильмы</a></li>
          <li class="cabinet-url-item"><a href="tableSession.php">Сеансы</a></li>
          <li class="cabinet-url-item"><a href="tableUser.php">Пользователи</a></li>
          <li class="cabinet-url-item"><a href="tableOrder.php">Билеты</a></li>
          ';
        }
      ?>
      <li class="cabinet-url-item"><a href="tableNews.php">Новости</a></li>
    </ul>
  </section>
</main>

<?php include 'footer.php' ?>
