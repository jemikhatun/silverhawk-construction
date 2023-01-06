<?php
include 'db_connect.php';

$phone = $_POST['phone'];
$email = $_POST['email'];




$insert="INSERT INTO `top_header`(`id`, `phone`, `email`) VALUES ('NULL','$phone', '$email')";

if(mysqli_query($dbconnect,$insert)){
    echo 'data was submitted';
}
  else{
    echo "something is wrong";
  }

?>