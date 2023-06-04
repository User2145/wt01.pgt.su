<?php include("header.php") ?>
<main>
  <section id="changes-form-section">
    <form action="supportfiles/addNewsProcess.php" method="post" class="formProcess">
      <h3>Форма добавления фильма</h3>
      <p>
        <label>Заголовок новости:<br></label>
        <input name="title" type="text" size="15">
      </p>
      <p>
        <label>Дата:<br></label>
        <input type="date" name="dateCreate" value="2023-06-04  ">
      </p>
      <p>
        <label>Картинка:<br></label>
        <input name="image" type="file" size="15" maxlength="15">
      </p>
      <p>
        <label>Описание:<br></label>
        <textarea name="description" cols="50" rows="10" maxlength = "10000"></textarea>
      </p>
      <!-- <p>
        <label>Первый сеанс:<br></label>
        <input type="datetime-local" name="session_time1" value="2017-06-01">
      </p>
      <p>
        <label>Второй сеанс:<br></label>
        <input type="datetime-local" name="session_time2" value="2017-06-01">
      </p> -->
      <p><input type="submit" name="clac" value="Добавить"></p>
    </form>
  </section>
</main>
<?php include 'footer.php' ?>