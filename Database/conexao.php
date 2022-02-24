<?php

    $DBDRIVE = 'mysql';
    $DBHOST = 'localhost';
    $DBNAME = 'db_boxcontrol';
    $DBUSER = 'root';
    $DBPASS = '';

    global $pdo;
    $pdo = new PDO(''.$DBDRIVE.':host='.$DBHOST.';dbname='.$DBNAME.'', $DBUSER, $DBPASS);

?>