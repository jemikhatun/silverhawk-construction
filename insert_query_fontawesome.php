<?php
include 'db_connect.php';

$icon1 = $_POST['icon1'];
$icon2 = $_POST['icon2'];
$icon3 = $_POST['icon3'];



$insert="INSERT INTO `fontawesome`(`id`, `icon1`, `icon2`,`icon3`) VALUES ('NULL','$icon1', '$icon2','$icon3')";

if(mysqli_query($dbconnect,$insert)){
    echo "data is submitted";
}
  else{
    echo "something is wrong";
  }

?>