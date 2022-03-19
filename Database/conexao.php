<?php

    session_start();

    global $pdo;

    $DBDRIVE = 'mysql';
    $DBHOST = 'localhost';
    $DBNAME = 'db_boxcontrol';
    $DBUSER = 'root';
    $DBPASS = '';

    $pdo = new PDO(''.$DBDRIVE.':host='.$DBHOST.';dbname='.$DBNAME.'', $DBUSER, $DBPASS);

?>