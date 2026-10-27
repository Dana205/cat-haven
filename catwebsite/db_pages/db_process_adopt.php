<?php
session_start();
if(!isset($_SESSION['user_id']) && !isset($_GET['cat_id'])){
    header('Location: dp_logout.php');
    exit();
}
include 'db_connect.php';
$user_id =$_SESSION['user_id'];
$cat_id =$_GET['cat_id'];


$sql = "UPDATE cats SET adopt_status = 1, adopt_date = CURDATE(), user_id = $user_id  WHERE cat_id = $cat_id;";

if ($conn->query($sql) === TRUE) {
  header('Location: ../cats-adopt.php?suc=trueadoption');

} else {
  header('Location: ../cats-adopt.php?suc=falseadoption');
}
$conn->close();



?>
