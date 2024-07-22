<?php

$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "signup_form";

$connection = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);

if(!$connection) {
    die($connection->error);
}
?>