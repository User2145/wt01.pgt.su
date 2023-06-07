<?php include 'header.php' ?>
<table>
  <?php
  $q = 'SELECT * FROM `orders` WHERE `orders`.`idSession_time` = 6;';
  $resultOrders = mysqli_query($connection, $q);



    $i = 1; //Ряды
    while ($i <= 7) {
      echo '<tr class="order-buy-form-tr">';
      $j = 1; //Места
      while ($j <= 23) {

        foreach($resultOrders as $row){
          if ($i == $row["col"] AND $j == $row["place"]){
            echo '<td class="order-buy-form-td"><img src="res/place.png" width="16"></td>';
          }
          else {
            echo '<td class="order-buy-form-td"><input name="place" type="radio" value="' . $i . '-' . $j . '"></td>';
          }
        }


        $j = $j + 1;
      }
      echo '</tr>';
      $i = $i + 1;
    }
  ?>
</table>
