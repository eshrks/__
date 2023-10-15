<?php

$server_name    = "localhost";
$username       = "root";
$password       = "shittyPassword";
$database       = "students_name";
$port           = "3307";

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
