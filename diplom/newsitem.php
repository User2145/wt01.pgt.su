<?php include 'header.php' ?>
<?php
  include('supportfiles/config.php');
  $id = $_GET['idNews'];

  $q = 'SELECT * FROM `news` WHERE news.id = ' . $id . ';';
  $result = mysqli_query($connection, $q);

  foreach($result as $row){
    $title[] = $row['title'];
    $image[] = $row['image'];
    $description[] = $row['description'];
  } ?>
  <main>
    <section id="news-item">

      <div>
        <img src="res/news/<?php echo $row['image']; ?>" id="news-image">
        <h2><?php echo $row['title']; ?></h2>
        <p id="news-description"><?php echo $row['description']; ?></p>
      </div>

    </section>
  </main>
<?php include 'footer.php' ?>
