<?php
include 'db_connect.php';

$id=  $_GET['id'];

$menu_name = $_POST['menu_name'];
$menu_url = $_POST['menu_url'];
$menu_update= "UPDATE main_menu SET menu_name='$menu_name',menu_url='$menu_url' WHERE id=$id";
 mysqli_query($dbconnect,$menu_update);
?>