
<?php
include 'db_connect.php';

$view_menu ="SELECT * FROM `main_menu`"; 
$menu_result = mysqli_query($dbconnect,$view_menu );
//$menu_item = mysqli_fetch_assoc( $menu_result);

?>
