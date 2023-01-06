<?php
include 'db_connect.php';
$parragraph=$_POST['parragraph'];
$link=$_POST['link'];

$insert="INSERT INTO `soket_section`(`id`, `parragraph`,`link`) VALUES ('NULL','$parragraph','$link')";
if(mysqli_query($dbconnect,$insert)){
    echo 'data is submited';
}
else{
    echo 'something is wrong';
}
?>
