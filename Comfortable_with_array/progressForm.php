<?php
{
    if (isset($_POST ['submitButton'])) {
        $username = $_POST['userName'];
        $id = $_POST['id'];
        echo $username . " " . $id;
    }

    $userArray = array(
        array('userID' => 1, 'Name' => 'Doe', 'Score' => 45, 'LastLogin' => '2012-08-30'),
        array('userID' => 2, 'Name' => 'Smith', 'Score' => 124, 'LastLogin' => '2012-09-02'),
        array('userID' => 3, 'Name' => 'Chan', 'Score' => 1, 'LastLogin' => '2011-12-23'),
        array('userID' => 4, 'Name' => 'Zee', 'Score' => 15, 'LastLogin' => '2012-07-01')
    );

    foreach ($userArray as $value) {
        if ($username === $value['Name'] && $id == $value['userID']) {
            $value['Score'] += 5;
            echo "</br>" . $value['Score'];

        } else {
            echo "</br>";
        }
    }
    echo date('l jS \of F Y h:i:s A');
}
?>