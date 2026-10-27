<?php
include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO Users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  header('Location: ../login.php?suc=truesigin');

} else {
  header('Location: ../signin.php?suc=falsesignin');
}
$conn->close();
?>
