<?php
include 'db_connect.php';

$id=  $_GET['id'];

$random = rand(1111,9999);
$logo = 'upload/'. $random . $_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);

$menu_logo_update= "UPDATE main_menu_logo SET logo='$logo' WHERE id=$id";
 mysqli_query($dbconnect,$menu_logo_update);
?>