<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trying PHP</title>
</head>
<body>
<?php
$String = "I am  a string";
$integer = 212;
$isSunny =  FALSE;
$float = 124.188989;

?>
 <table border="1">
     <tr>
         <th>Type</th>
         <th>Variable</th>
     </tr>
     <tr>
         <td width ="200"><?php echo gettype($String)?></td>
         <td width ="200"><?php  echo $String?></td>
     </tr>

     <tr>
         <td width="200"><?php  echo  gettype($integer)?></td>
         <td width ="200"><?php  echo $integer ?></td>
     </tr>

     <tr>
         <td width ="200"><?php echo gettype($isSunny)?></td>
         <td width ="200"><?php echo $isSunny?></td>
     </tr>

     <tr>
         <td width ="200"><?php echo gettype($float)?></td>
         <td width ="200"><?php  echo $float?></td>
     </tr>

 </table>
</body>
</html>