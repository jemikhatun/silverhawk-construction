<?php
include 'db_connect.php';
$random = rand(1111,9999);
$image = 'upload/'. $random . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);
$heading = $_POST['heading'];
$parragraph = $_POST['parragraph'];




$insert_about_section="INSERT INTO `about_page`(`id`,`image`,`heading`, `parragraph`) VALUES ('NULL','$image','$heading', '$parragraph')";
if(mysqli_query($dbconnect,$insert_about_section)){
    echo 'data was submitted';
}
else{
    echo 'something is wrong';
}





?>

  
