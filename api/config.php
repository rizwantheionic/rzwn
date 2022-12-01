<?php
    define('DB_NAME', 'dbs_firstio');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');

    $kon = mysqli_connect("localhost", "root", "root", "dbs_firstio") or die(mysqli_error());
?>
