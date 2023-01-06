<?php
include 'db_connect.php';

$view ="SELECT * FROM `main_menu_logo` "; 
$result2 = mysqli_query($dbconnect,$view );
$menulogo= mysqli_fetch_assoc( $result2);

?>