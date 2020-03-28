<?php

class Connection
{
  public static function connect($database)//dinamicko pozivanje funkcije
  {
    try {
      return new PDO ('mysql:host='.$database['host'].';dbname='.$database['dbname'].';',$database['user'],
      $database['password']);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
  }
}




 ?>
