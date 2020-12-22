<?php

    $BASE='festival';
    $SRV='localhost:3306';
    $PORT='80';
    $USR='root';
    $MDP='theo';

    $db = new PDO("mysql:host=$SRV;dbname=$BASE;port=$PORT;charset=utf8",$USR,$MDP);

    
?>