<?php
 $userName = $_POST['userName'];
 $userPassword = $_POST['pass_word'];

$login = false;
$user_info = array(
      "John"=>"css",
      "David"=>"html",
     "solo"=>"Js",
       "Ellie"=>"try",
       "GreatGuy"=>"abc123",
       "blogger"=>"23seventeen23",
       "Joe"=>"php",
      "Zola"=>"football",
      "Messi"=>"Barca",
      "Etoo"=>"Africa"
);
foreach ($user_info as $value=> $user_value) {
    $login = ($value === $userName && $user_value === $userPassword) ? true : false;
    if($login){
        break;
    }
}

if($login) {
    welcome();
}
  else {
      error();
  }


function  welcome(){
    echo "<p><h4>You have successfully logged in</h4></p>";
}

function error(){
    echo "<p><h4>Sorry wrong information was entered</h4></p>" . "<br>";
}

/*
  Websites provide error to message when their credential are incorrect to prevent hackers from stealing the users information.
  Once a website tells the user which of their information is incorrect, hackers can concentrate on that information and hack
  the user information such as using sql injection.
 */
?>




