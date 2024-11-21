<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'gamedex';

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die('Conexão falou: '.$conn->connect_error);
    }

?>