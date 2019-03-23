<?php
require_once('database.php');

if(isset($_POST['next'])){
    $firstname= $_POST['uname'];
    $password= $_POST['pwd'];

    echo($firstname ." ". $password);


}


?>