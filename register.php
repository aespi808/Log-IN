<?php
require_once('db.php');
$pass = $_POST['pass'];
$email = $_POST['email']; 

$sql = "INSERT INTO `users` (pass,email) VALUES ('$pass', '$email')";

$conn -> query($sql);