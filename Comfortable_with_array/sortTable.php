<!doctype html>
<?php
$userArray = array(
    array('userID' => 1, 'Name' => 'Doe', 'Score' => 45, 'LastLogin' => '2012-08-30'),
    array('userID' => 2, 'Name' => 'Smith', 'Score' => 124, 'LastLogin' => '2012-09-02'),
    array('userID' => 3, 'Name' => 'Chan', 'Score' => 1, 'LastLogin' => '2011-12-23'),
    array('userID' => 4, 'Name' => 'Zee', 'Score' => 15, 'LastLogin' => '2012-07-01')
);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Getting Comfortable with Array</title>
</head>
<body>
 <h1 class="sortedID">Sorted By ID</h1>
<table border="2px " >
    <tr>
        <th class="table_style">User ID</th>
        <th class="table_style">Name</th>
        <th class="table_style">Score</th>
        <th class="table_style">Last Login</th>
    </tr>
      <td><?php include_once "printTable.php"; printTable($userArray);?></td>
</table>
  <br>
 <h2 class="sortedScore">Sorted By Date</h2>
     <table border="2px " >
         <tr>
             <th class="table_style">User ID</th>
             <th class="table_style">Name</th>
             <th class="table_style">Score</th>
             <th class="table_style">Last Login</th>
         </tr>
         <td><?php include_once "printScore.php"; print_Score($userArray);?></td>
 </table>
</body>
</html>


<!-- Karma Score greater than 10 -->
<?php
echo "<h1>Karma Score greater than 10</h1>";
foreach ($userArray as $item=>$value){
    if($value['Score']>10){
        echo $value['Score']. "<br>";
    }
    else {
        echo " ";
    }
}
?>




<!-- Add five to the user score if exited in the array-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Increase Score</title>
    <style>
        label {
            display: inline-block;
            margin:5px;
            padding:10px;
        }
    </style>
</head>
<body>

<form action="progressForm.php" method="post">
    <label for="username">Name</label>
    <input type="text" name="userName" id="username">

    <label for="id">ID</label>
    <input type="text" name="id" id="id">

    <input type="submit" name="submitButton">
</form>
</body>
</html>
