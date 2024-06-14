<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$database_name = "brainster_labs";

$conn = mysqli_connect($servername, $db_username, $db_password, $database_name);

if (!$conn) {
    die("Connection to database has failed");
}