<html>
<head><title>Form and Processing</title></head>
<body>
<?php
/*
function putForm($errors)
{
    echo "<form method='post' action='oneFile.php'> First Name:<input type='text'  name='Fname'> ";
    // fileName = trim(htmlspecialchars($_POST['Fname']))
    echo "<font color='red'>".$errors['Fname']."</font><br />";
    echo "Submit:<input type='submit' name='submit'>";
}
?>
<body>
<?php
$errorList = array('Fname' => "");
if (!isset($_POST['submit']))
putForm($errorList);
else if ($_POST['Fname']== NULL){
    $errorList['Fname'] = "PLEASE PUT IN PROPER NAME";
    putForm($errorList);
}
else
{
?>
<p>Welcome Glad you can join us! <br />
    <?php
    }
*/
    ?>

<form action="oneFile.php" method="post" id="mainForm">
    <label for="userName">Username:</label>
    <input type="text" id="userName" name="userName" size="30" maxlength="50"  required="required">
    <br>
    <label for="passWord"> Password:</label>
    <input type="password" name="pass_word" id="passWord" size="30" maxlength="20" required="required" >
    <br>
    <input type="submit" value="Login" id="submit" name="submit">
</form>

<style>
    label {
        padding:10px;
        margin:2px;
    }

    #userName {
        margin-bottom:20px;
    }


    #submit {
        padding-left:20px;
        background:crimson;
        color:#fff;
        position: relative;
        right:-130px;
        bottom:-15px;
    }

    #mainForm {
        margin:15% auto;
        width:50%;
    }
</style>

<?php
if(isset($_POST['submit'])) {
    $userName = htmlspecialchars(trim($_POST['userName']));
    $userPassword = htmlspecialchars(trim($_POST['pass_word']));

    $login = false;
    $user_info = array(
        "John" => "css",
        "David" => "html",
        "solo" => "Js",
        "Ellie" => "try",
        "GreatGuy" => "abc123",
        "blogger" => "23seventeen23",
        "Joe" => "php",
        "Zola" => "football",
        "Messi" => "Barca",
        "Etoo" => "Africa"
    );
    foreach ($user_info as $value => $user_value) {
        $login = ($value === $userName && $user_value === $userPassword) ? true : false;
        if ($login) {
            break;
        }
    }

    if ($login) {
        welcome();
    } else {
        error();
    }
}

function  welcome(){
    echo "<p><h4>You have successfully logged in</h4></p>";
}

function error(){
    echo "<p><h4>Sorry wrong information was entered</h4></p>" . "<br>";
}

?>

</body>
</html>
</html>
