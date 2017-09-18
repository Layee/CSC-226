<?php
$connection = mysqli_connect('localhost','root','Tedium','loginapp'); // connect to a database
if($connection) {
    echo "we're connected \n";
} else {
    die("Not connected");
}
$query = "SELECT * FROM users"; // insert data into the database
$result = mysqli_query($connection,$query);

if(!$result) {
    die("Query Failed". mysqli_errno());
}
?>