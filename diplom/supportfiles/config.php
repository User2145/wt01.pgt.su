<?php
$config = array(
  "connection" => array(
    "server" => "localhost",
    "username" => "root",
    "password" => "",
    "dbname" => "adonin",
  )
);

$connection = mysqli_connect(
  $config['connection']['server'],
  $config['connection']['username'],
  $config['connection']['password'],
  $config['connection']['dbname']
);

if($connection == false){
  echo "Не удалось соединится с БД";
  mysql_error($connection);
  exit();
}
session_start();
?>
