<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'database';

$mysqli = new mysqli($host, $user, $password, $database);

var_dump($mysqli);

//if ($mysqli->connect_errno) {
//    echo sprintf('Falha na conexão: %s', $mysqli->connect_error);
//}
