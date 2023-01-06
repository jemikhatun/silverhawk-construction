<?php
include 'db_connect.php';

$menu_name = $_POST['menu_name'];
$menu_url = $_POST['menu_url'];




$insert1="INSERT INTO `main_menu`(`id`, `menu_name`, `menu_url`) VALUES ('NULL','$menu_name', '$menu_url')";

if(mysqli_query($dbconnect,$insert1)){
    echo "data is submitted";
}
  else{
    echo "something is wrong";
  }

?>




