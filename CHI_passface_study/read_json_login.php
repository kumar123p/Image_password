<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "K1dzteam!", "PassFace");

$image = $_POST["img"];
$uname = $_POST["username"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
date_default_timezone_set('America/Boise');
$timestamp = date('Y-m-d H:i:s');
$sql = "INSERT INTO log_108_credentials (uname, p1, p1_time) VALUES ('$uname', '$image', '$timestamp')";

if (mysqli_query($link, $sql)) {
  echo "Records added successfully.";
mysqli_close($link);
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//mysqli_close($link);
