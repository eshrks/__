<?php

$server_name    = "localhost";
$username       = "root";
$password       = "root";
$database       = ""; // INCLUDE THE NAME OF YOUR DATABASE HERE.
$port           = "3307"; // USE PORT "3306" IF THAT DOESN'T WORK.

$conn = mysqli_connect(
    $server_name,
    $username,
    $password,
    $database,
    $port
);

if (!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}