<?php include 'header.php' ?>

<main>
  <section id="news-main">
    <h2>Новости</h2>

    <?php
      include("supportfiles/config.php");
      $sql = mysqli_query($connection, 'SELECT * FROM `news`');
      foreach ($sql as $row){
        echo '
          <div class="news-block">
            <a href="newsitem.php?idNews=' . $row["id"] . '"><img src="res/news/' . $row["image"] . '" alt="Новость" class="news-image"></a>
            <p class="news-date">' . $row["dateCreate"] . '</p>
            <p class="news-headline">' . $row["title"] . '</p>
            <p class="news-description">' . $row["description"] . '<a href="?id=1" class="">Узнать больше.</a></p>
          </div>';
      };
    ?>

    <div class="news-block">
      <img src="res/news/1.jpg" alt="Новость" class="news-image">
      <p class="news-date">30.05.2023</p>
      <p class="news-headline">Режиссер фильма "Константин 2" Френсис Лоуренс пообещал "взрослый" рейтинг</p>
      <p class="news-description">Фильм "Константин 2" официально находится в разработке у студии Warner Brothers, и Киану Ривз возвращается в роли антигероя, сражающегося с потусторонними силами.
        Режиссер первой серии Френсис Лоуренс также собирается вернуться, сняв картину по сценарию, который подготовил Акива Голдсман. <a href="?id=1" class="">Узнать больше.</a></p>
    </div>
    <div class="news-block">
      <img src="res/news/2.jpg" alt="Новость" class="news-image">
      <p class="news-date">29.05.2023</p>
      <p class="news-headline">Следующий фильм Мартина Скорсезе будет об Иисусе Христе</p>
      <p class="news-description">Мартин Скорсезе, отправившийся в турне по Италии после Каннского кинофестиваля, в минувшие выходные встретился с Папой Римским Франциском и объявил, что снимет фильм об Иисусе Христе. "Я откликнулся на призыв Папы Римского к творческим людям единственным известным мне способом: придумал и написал сц... <a href="?id=1" class="">Узнать больше.</a></p>
    </div>
    <div class="news-block">
      <img src="res/news/3.jpg" alt="Новость" class="news-image">
      <p class="news-date">25.05.2023</p>
      <p class="news-headline">Сериал "Дом дракона" будет состоять из четырех сезонов</p>
      <p class="news-description">Популярный сериал "Дом дракона", вероятнее всего, будет состоять из четырех сезонов. Об этом рассказала глава департамента драматических проектов HBO Франческа Орси. По ее словам обсуждение деталей сюжета уже ведется, хотя часть работ оказалась приостановленной в результате стачки сценаристов. <a href="?id=1" class="">Узнать больше.</a></p>
    </div>

  </section>
</main>

<?php include 'footer.php' ?>
