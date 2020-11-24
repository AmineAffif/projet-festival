<?php

    $BASE='festival';
    $SRV='localhost';
    $PORT='3308';
    $USR='root';
    $MDP='root';

    $db = new PDO(
        // sur une ligne sans espaces
        "mysql:host=$SRV;dbname=$BASE;port=$PORT;charset=utf8",
        $USR,
        $MDP
    );
?>