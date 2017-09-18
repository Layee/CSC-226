<?php
function printTable ($userArray)
{
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

?>