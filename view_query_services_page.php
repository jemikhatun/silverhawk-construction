<?php
  include 'db_connect.php';

  $view ="SELECT * FROM `services_page`"; 
  $result = mysqli_query($dbconnect,$view );
  $datashow = mysqli_fetch_assoc( $result);
  ?>