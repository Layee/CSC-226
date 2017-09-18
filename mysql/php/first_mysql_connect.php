<?php 
  if(isset($_POST['submit'])){
    $username = $_POST['userName'];
     $userPassword = $_POST['pass_word'];

      $connection = mysqli_connect('localhost','root','Tedium','loginapp'); // connect to a database
      $query = "INSERT INTO users(user_name,user_password) VALUES ('$username', '$userPassword')"; // insert data into the database
      $result = mysqli_query($connection,$query);

      if(!$result) {
          die("Query Failed". mysqli_errno());
      }
  }
?>