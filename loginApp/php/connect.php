<?php
  $connect = mysqli_connect('localhost','root','Tedium','user_app');

    if($connect) {
        echo  "We're connected";
    }
        else {
            die("Couldn't connect to the database". mysqli_error($connect));
        }
?>