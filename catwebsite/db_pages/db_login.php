<?php
session_start(); // بدء الجلسة
include 'db_connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM Users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['password'] == $password) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];
        
        header("Location: ../index.php");
        exit(); 
    } else {
        header('Location: ../login.php?suc=falselogin');

    }
} else {
    header('Location: ../login.php?suc=falselogin');

}

$conn->close();
?>
