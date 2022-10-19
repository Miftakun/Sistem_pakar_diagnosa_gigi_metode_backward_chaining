<?php
$conn = mysqli_connect("localhost", "root", "", "db_pakar");

$username = $_POST["usr"];
$email = $_POST["email"];
$password = $_POST["pswd"];

$query = "INSERT INTO `user` SET username = '$username', email = '$email', password='$password'";

mysqli_query($conn, $query);
header("location: login.php");

?>