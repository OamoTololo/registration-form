<?php
$success = 0;
$user = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'inc/databaseConnection.php';

    $username = $_POST["username"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

//    $sql = "INSERT INTO registartion (username, password) VALUES ('$username', '$password')";
//    $result = mysqli_query($connection, $sql);
//
//    if ($result) {
//        echo "New record created successfully";
//    } else {
//        die($connection->error);
//    }

    $sql = "SELECT * FROM registration WHERE username = '$username'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = 1;
    } else {
        $sql = "INSERT INTO registration (username, name, surname, gender, email, dob, password, confirmPassword) VALUES ('$username', '$name', '$surname', '$gender', '$email', '$dob', '$password', '$confirmPassword')";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            $success = 1;
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}
?>