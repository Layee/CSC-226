<?php
  function database () {
      
      // connect to the database called PageVisits
    $connect = mysqli_connect('localhost');

      // if connection failed, end it with the die() function
     if(!$connect) {
          die("Error connecting to the database...\n".mysqli_error($connect));
     }
      return $connect;
}
?>
