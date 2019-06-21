<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'inner_join';

$connect  = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die('No database Connection' . mysqli_connect_error());
}

?>