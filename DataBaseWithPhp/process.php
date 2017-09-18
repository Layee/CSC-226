<?php  include "connectDb.php";
  if(isset($_POST['submit'])) {
    $searchtype = $_POST['searchtype'];
      $searchterm = trim($_POST['searchterm']);

      if(!$searchterm || ! $searchtype) {
          echo "<p> Please enter a search </p>";
          exit;
      }
      switch ($searchtype) {
          case 'page_name':
          case 'remote_host':
              break;
          default:
              echo  "<p> Invalid search type and please try again </p>";
      }
      $databse = database();

     $query = "SELECT page_name, visit_date, previous_page, request_method, remote_host, remote_port FROM visitInfo 
                WHERE $searchtype= ?";
   $stmt = $databse -> prepare($query);
   $stmt-> bind_param('s',$searchterm);
    $stmt-> execute();
     $stmt->store_result();
      $stmt->bind_result($pageName,$visitDate,$previouPage,$requestMethod,$remoteHost,$remotePort);
      echo "<p> The number of items found: .$stmt->num_rows</p>";

      while ($stmt->fetch()) {
          echo  "<p><strong>page Name: ".$pageName."</strong></p>";
          echo "Visit Date: ".$visitDate."<br>";
          echo  "Previou Page: ".$previouPage. "<br>";
          echo  " Request Method: ".$requestMethod. "<br>";
          echo  "Remote Host: ".$remoteHost. "<br>";
          echo "Remore Port: ".$remotePort. "<br>";
      }
      $stmt->free_result();
      $databse->close();

  }
?>