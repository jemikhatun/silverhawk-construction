<?php
 include 'db_connect.php';
 $id=  $_GET['id'];

 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $update= "UPDATE top_header SET phone='$phone',email='$email' WHERE id=$id";
 mysqli_query($dbconnect,$update);

?>