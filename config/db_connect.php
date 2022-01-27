<?php
  // connect to database
  $conn = mysqli_connect('localhost','Hassan','test12','mughal_pizza');

  // check connection
  if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error();
  }



?>