<?php
include 'db_connect.php';

$view ="SELECT * FROM `fontawesome` "; 
$result2 = mysqli_query($dbconnect,$view );
$showicon = mysqli_fetch_assoc( $result2);

?>