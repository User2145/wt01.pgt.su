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
  <?php include 'header.php' ?>

  <main>
    <form class="techsupport" action="/">
      <p>Ваше имя:</p>
      <input type="text" size "40"></input>
      <p>В чем заключается проблема</p>
      <textarea cols="40" rows="3"></textarea>
      <input type="submit" value="Отправить">
    </form>
  </main>
  <?php include 'footer.php' ?>
</body>
</html>
