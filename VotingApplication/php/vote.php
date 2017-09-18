<?php include "connect.php";
 $demoTotal = 0;
  $repTotal = 0;
$database = connectDb();
$query = "SELECT polls.state,
evotes,
AVG(perDem) AS perDem,
AVG(perGOP) AS perGOP
FROM polls,electoral
WHERE polls.state = electoral.state
GROUP BY state";
  $secondQuery = "SELECT state, evotes FROM electoral";
  $query = mysqli_query($database,$query);

 if(!$query) {
     die("Failed Query".mysqli_errno($database));
 }

   while($row=mysqli_fetch_assoc($query)){
       $state = $row['state'];
       $perDem = $row['perDem'];
       $perGOP = $row['perGOP'];
        $evotes = $row['evotes'];

       if($perDem > $perGOP) {
            $demoTotal += $evotes;
       }  else {
             $repTotal += $evotes;
       }

   }
echo "Total democratic evotes:".$demoTotal."</br>";
echo "Total Repbulican evotes:".$repTotal."</br>";
?>
