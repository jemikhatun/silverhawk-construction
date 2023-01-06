<?php
include 'db_connect.php';
$random = rand(1111,9999);
$slider_image1 = 'upload/'. $random . $_FILES['slider_image1']['name'];
move_uploaded_file($_FILES['slider_image1']['tmp_name'],$slider_image1);

$random = rand(1111,9999);
$slider_image2 = 'upload/'. $random . $_FILES['slider_image2']['name'];
move_uploaded_file($_FILES['slider_image2']['tmp_name'],$slider_image2);

$insert_image="INSERT INTO `slider_section_imagee`(`id`,`slider_image1`,`slider_image2`) VALUES ('NULL','$slider_image1','$slider_image2')";
if(mysqli_query($dbconnect,$insert_image)){
    echo 'data was submitted';
}
else{
    echo 'something is wrong';
}
?>


