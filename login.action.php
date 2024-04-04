<?php
session_start();
include_once './dbc.php';






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
    $result = $connect->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['job_title'] = $row['job_title'];
        $_SESSION['salary'] = $row['salary'];
        header("location: profile.php");
    } else {
        $error = "Invalid username or password";
    }
}

?>