<?php

$HOST = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE = "registration-form";

$connection = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);

if($connection) {
   echo "Connection Successful";
} else {
    die(mysqli_error($connection));
}
?>