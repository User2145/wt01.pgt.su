
  <?php include 'header.php' ?>

  <main>
    <section id="afisha-section">
      <ul id="afisha">
          <?php
            include("supportfiles/config.php");
            $sql = mysqli_query($connection, 'SELECT * FROM `films`');
            foreach ($sql as $row){
              echo '
                <li class="afisha-item">
                <a href="filmitem.php?idFilm=' . $row["id"] . '"><img src=res/film/' . $row["img"] . ' class="afisha-image"></a>
                <p class="afisha-name">' . $row["name"] . '</p>
                <p class="afisha-genre">' . $row["genre"] . '</p>
                <p class="afisha-order-button"><a href="filmitem.php?idFilm=' . $row["id"] . '">Подробнее</a></p>
                </li>';
            };
          ?>
      </ul>
    </section>
  </main>

  <?php include 'footer.php' ?>
