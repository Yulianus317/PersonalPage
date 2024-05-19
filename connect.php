<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'artikel pemograman web';

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if(!$conn) {
    die("Connect failde: ".mysqli_connect_error());
}

$query = "SELECT * FROM artikel";
$result = $conn->query($query);