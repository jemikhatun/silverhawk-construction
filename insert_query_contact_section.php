<?php
include 'db_connect.php';
$parragraph=$_POST['parragraph'];
$number_url=$_POST['number_url'];

$insert="INSERT INTO `contant_bit`(`id`, `parragraph`, `number_url`) VALUES ('NULL','$parragraph','$number_url')";
if(mysqli_query($dbconnect,$insert)){
    echo 'data is submited';
}
else{
    echo 'something is wrong';
}
?>