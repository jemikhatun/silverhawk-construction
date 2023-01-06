<?php
include 'db_connect.php';

$random = rand(1111,9999);
$image = 'upload/'. $random . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$image);

$hover_heading=$_POST['hover_heading'];
$hover_parragraph=$_POST['hover_parragraph'];


$insert="INSERT INTO `gallery_section`(`id`, `image`, `hover_heading`, `hover_parragraph`) VALUES ('NULL','$image','$hover_heading','$hover_parragraph')";

if(mysqli_query($dbconnect,$insert)){
    echo 'data is submitted';
}
else{
    echo 'something is wrong';
}
?>







