<?php 
   function connectDb()
   {
       $connect = mysqli_connect('localhost','swaray','abraham5015','voting');

       if (!$connect) {
           die("Error connecting to the database" . mysqli_error($connect));
       }
       return $connect;
   }
?>
