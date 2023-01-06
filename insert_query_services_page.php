<?php 
include 'db_connect.php';
$heading= $_POST['heading'];

$random = rand(1111,9999);
$logo1 = 'upload/'. $random . $_FILES['logo1']['name'];
move_uploaded_file($_FILES['logo1']['tmp_name'],$logo1);
$parragraph1=$_POST['parragraph1'];

$random = rand(1111,9999);
$logo2 = 'upload/'. $random . $_FILES['logo2']['name'];
move_uploaded_file($_FILES['logo2']['tmp_name'],$logo2);
$parragraph2=$_POST['parragraph2'];

$random = rand(1111,9999);
$logo3 = 'upload/'. $random . $_FILES['logo3']['name'];
move_uploaded_file($_FILES['logo3']['tmp_name'],$logo3);
$parragraph3=$_POST['parragraph3'];


$insert="INSERT INTO `services_page`(`id`, `heading`, `logo1`, `parragraph1`, `logo2`, `parragraph2`, `logo3`, `parragraph3`) VALUES ('NULL','$heading','$logo1','$parragraph1','$logo2','$parragraph2','$logo3','$parragraph3')";
if(mysqli_query($dbconnect,$insert)){
    echo 'data is submitted';
}
else{
    echo 'something is wrong';
}
?>