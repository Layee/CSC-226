<?php
function print_Score ($userArray)
{
    strtotime(usort($userArray,'sortScore'));
    foreach ($userArray as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['userID'] . '</td>';
        echo '<td>' . $value['Name'] . '</td>';
        echo '<td>' . $value['Score'] . '</td>';
        echo '<td>' . $value['LastLogin'] . '</td>';
        echo '</tr>';
        echo "<br>";
    }
}

function sortScore($one,$two){
    if($one['LastLogin'] == $two['LastLogin']) {
        return 0;
    }
    else if ($one['LastLogin'] > $two['LastLogin']) {
        return 1;
    }

    else {
        return -1;
    }
}


/*
$userArray = array(
    array('userID' => 1, 'Name' => 'Doe', 'Score' => 45, 'LastLogin' => '2012-08-30'),
    array('userID' => 2, 'Name' => 'Smith', 'Score' => 124, 'LastLogin' => '2012-09-02'),
    array('userID' => 3, 'Name' => 'Chan', 'Score' => 1, 'LastLogin' => '2011-12-23'),
    array('userID' => 4, 'Name' => 'Zee', 'Score' => 15, 'LastLogin' => '2012-07-01')
);
foreach ($userArray as $item=>$value){
     if($value['Score'] >= 10){
         echo $value['Score']. "<br>";
     }
       else {
           return " ";
       }
}
?>
*/