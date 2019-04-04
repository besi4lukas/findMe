<?php
require_once('database.php');

if(isset($_POST['next'])){
    $username= $_POST['uname'];
    $password= md5($_POST['pwd']);

    $query="SELECT * FROM users WHERE uname = '$username' AND pwd = '$password'";
    $result = mysqli_query($db,$query);
    $fetch_result = mysqli_fetch_row($result);

    $data = mysqli_num_rows($result) ;
    if(($data)!=0){
    
        return "success" ;
      
    }
    else{
        return "Invalid credentials" ;
    }



}


?>