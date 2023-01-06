<?php
  include 'db_connect.php';

  $view ="SELECT * FROM `soket_section`"; 
  $result_socket = mysqli_query($dbconnect,$view );
  $socket_data = mysqli_fetch_assoc( $result_socket);
  
?>