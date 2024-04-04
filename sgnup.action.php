<?php
session_start();
include_once './dbc.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $job_title = $_POST['job_title'];
    $salary = $_POST['salary'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Insert into staff table
    $sql = "INSERT INTO staff (name, job_title, salary, username, password) 
            VALUES ('$name', '$job_title', $salary, '$username', '$password')";

    if ($connect->query($sql) === TRUE) {
        header("location: login.php");
    } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>