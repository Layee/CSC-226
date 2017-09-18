<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bob's Auto Parts</title>
    <link rel="stylesheet" href="../Bob_Auto_Parts/css/styles.css">
</head>
<body>
<div class="container">
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>

</div>



<?php

  $tire = $_POST['tireQuantity'];
  $oil = $_POST['oilQuantity'];
 $spark = $_POST['sparkPlugs'];

echo  "Total tires: " .$tire. "<br>" . "Total oil " . $oil . "<br>" . "total Spark Plugs " .$spark;

date_default_timezone_set('UCT');
echo "<p> Order Processed  at ".date('h:i, jS F Y')." </p>";
?>

</body>
</html>
