<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "testepitech";

$conn = new mysqli(
    $hostname,
    $username,
    $password,
    $dbname
);
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
