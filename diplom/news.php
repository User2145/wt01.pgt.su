<?php include 'header.php' ?>

<main>
  <section id="news-main">
    <h2>Новости</h2>

    <?php
      include("supportfiles/config.php");
      $sql = mysqli_query($connection, 'SELECT * FROM `news`');
      foreach ($sql as $row){
        $description = mb_substr($row["description"], 0, 400);
        echo '
          <div class="news-block">
            <a href="newsitem.php?idNews=' . $row["id"] . '"><img src="res/news/' . $row["image"] . '" alt="Новость" class="news-image"></a>
            <p class="news-date">' . $row["dateCreate"] . '</p>
            <p class="news-headline">' . $row["title"] . '</p>
            <p class="news-description">' . $description . '... <a href="newsitem.php?idNews=' . $row["id"] . '" class="">Узнать больше.</a></p>
          </div>';
      };
    ?>

  </section>
</main>

<?php include 'footer.php' ?>
