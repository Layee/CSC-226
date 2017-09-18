<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Getting Comfortable with Array</title>
</head>
<body>
<table >
    <tr>
        <th class="table_style">User ID</th>
        <th class="table_style">Name</th>
        <th class="table_style">Score</th>
        <th class="table_style">Last Login</th>
    </tr>

    <?php
    $userArray = array(
        array('userID'=>1,'Name'=>'Doe', 'Score'=>45, 'LastLogin'=>'2012-08-30'),
    array('userID'=>2, 'Name'=>'Smith', 'Score'=>124, 'LastLogin'=>'2012-09-02'),
    array('userID'=>3, 'Name'=>'Chan', 'Score'=>1, 'LastLogin'=>'2011-12-23'),
    array('userID'=>4, 'Name'=>'Zee', 'Score'=>15, 'LastLogin'=>'2012-07-01')
    );
    foreach ($userArray as $key=>$value) {
    echo '<tr>';
    echo '<td>' . $value['userID'] . '</td>';
    echo '<td>' . $value['Name'] . '</td>';
    echo '<td>' . $value['Score'] . '</td>';
    echo '<td>' . $value['LastLogin'] . '</td>';

    echo '</tr>';
    //echo   $value['userID'] . "<br>".  $value['Name'] . "<br>". $value['Score'] . "<br>". $value['LastLogin']. "<br>";
    echo  "<br>";
    }
    ?>
</table>
</body>
</html>
