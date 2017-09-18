<?php
    $connecting = mysqli_connect('localhost','root','Tedium','users');
  if($connecting) {
      die("Error connecting to the database...".mysqli_errno($connecting));
  }  else {
        echo  "we are connected";
  }
?>