<?php
include 'db_connect.php';

$random = rand(1111,9999);
$logo = 'upload/'. $random . $_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);
$icon1 = $_POST['icon1'];
$icon2 = $_POST['icon2'];
$icon3 = $_POST['icon3'];



$insert="INSERT INTO `footer_section`(`id`,`logo`, `icon1`, `icon2`,`icon3`) VALUES ('NULL', '$logo','$icon1', '$icon2','$icon3')";

if(mysqli_query($dbconnect,$insert)){
    echo "data is submitted";
}
  else{
    echo "something is wrong";
  }

?>