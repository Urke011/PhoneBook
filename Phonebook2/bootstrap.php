<?php
    require 'config.php';
    require 'Connection.php';
    $config = require 'config.php';
    $db = Connection::connect($config['database']);//dinamicko pozivanje funkcije slanjem parametara

    require 'User.php';

    $user = new User($db);





 ?>
