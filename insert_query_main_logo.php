<?php

include 'db_connect.php';
$random = rand(1111,9999);
$logo = 'upload/'. $random . $_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);


$insert2="INSERT INTO `main_menu_logo`(`id`, `logo`) VALUES ('NULL','$logo')";

if(mysqli_query($dbconnect,$insert2)){
    echo "data is submitted";
}
  else{
    echo "something is wrong";
  }?>