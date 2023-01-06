<?php
include 'db_connect.php';

$view ="SELECT * FROM `gallery_section` "; 
$result2 = mysqli_query($dbconnect,$view );
//$show = mysqli_fetch_assoc( $result2);

?>
<?php
include 'db_connect.php';

$view_gallery ="SELECT * FROM `gallery_section_some` "; 
$result_gallery = mysqli_query($dbconnect,$view_gallery );
$gallery_show = mysqli_fetch_assoc($result_gallery);
?>