<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include_once 'connection.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    // echo $sql;
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['data'] = $result->fetch_all(MYSQLI_ASSOC);
        header("Location: /LKS-CLOUDBABEL2024-main/app/index.php");
        exit;
    } else {
        echo "Username or Password is incorrect.";
        die;
    }
}