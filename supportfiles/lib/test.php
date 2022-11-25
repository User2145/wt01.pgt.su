<?php
  include ('supportfiles/config.php');


  class DataMeneger {
    public static function dropRow($table, $id) {
      $sqlQuery = 'DELETE FROM ' . $table . ' WHERE `' . $table . '`.`id` = ' . $id . '';
      global $connection;
      $result = mysqli_query($connection, $sqlQuery);
    }

    public static function drawTableFilm() {

      echo '
      <tr>
        <td>Отметить</td>
        <td>Идентификатор</td>
        <td>Название</td>
        <td>Жанр</td>
        <td>Изображение</td>
      </tr>';

      $sqlQuery = 'SELECT * FROM `films`';
      global $connection;
      $result = mysqli_query($connection, $sqlQuery);
      while ($rows = mysqli_fetch_array($result)){
        echo '
        <tr>
          <td><input name="' . $rows["id"] . '" type="button" value="У"></input></td>
          <td>' . $rows["id"] . '</td>
          <td>' . $rows["name"] . '</td>
          <td>' . $rows["genre"] . '</td>
          <td>' . $rows["img"] . '</td>
        </tr>';
      }
    }
  }

  // class SimpleClass
  // {
  //   public $var = 'yoyo';
  //
  //   public function displayVar() {
  //     echo $this->var;
  //   }
  // }


  // $test = new SimpleClass();
  // $test->displayVar();


?>
