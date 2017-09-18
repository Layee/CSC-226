
<table border="1">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
<tr>
    <td><?php  print_value();?></td>

</table>

<table border="1" style="margin: 70px auto;">
    <tr>
        <th>Key</th>
        <th>Sorted</th>
    </tr>
    <td><?php sortElements();?></td>
</table>

<table border="1">
    <tr>
        <th>Key</th>
        <th>Reverse Order</th>
    </tr>
    <td><?php reverseElements();?></td>
</table>

<?php

function print_value(){

    $user_array =  array (13,12,100,93,30,5000,70,60,);
    foreach ($user_array as $key => $value) {
         echo '<tr>';
        echo '<td>' .$key . "</td>";
        echo '<td>' . $value;
        echo  '</td></tr>';
    }
}

function sortElements(){
    $sort_Array =  array (13,12,100,93,30,5000,70,60,);
    sort($sort_Array);
    unset($sort_Array[2]);
    foreach ($sort_Array as $k=>$v) {
        echo "<tr>";
        echo '<td>'. $k. "</td>";
        echo '<td>'. $v. "</td>";
        echo '<tr></tr>';
    }
}

function reverseElements() {
    $reverse_Array =  array (13,12,100,93,30,5000,70,60,);
    arsort($reverse_Array);
    foreach ($reverse_Array as $k=>$v) {
        echo "<tr>";
        echo '<td>'. $k. "</td>";
        echo '<td>'. $v. "</td>";
        echo '<tr></tr>';
}

}
?>

