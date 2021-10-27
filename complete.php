<?php
include 'session.php';
$db = mysqli_connect('localhost','zeusprime','Hemanth@1711','user_info');
$email = $_SESSION["email"];
$sql = mysqli_query($db, "DELETE FROM user_login WHERE email='$email'");
header('Location: index.php');
?>