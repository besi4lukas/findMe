<?php
require_once('database.php');

if(isset($_POST['next'])){
    $firstname= $_POST['fname'];
    $lastname= $_POST['lname'];
    $phone= $_POST['phone'];
    $username= $_POST['uname'];
    $password= md5($_POST['pwd']);

    $query="SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($db,$query);
    $fetch_result = mysqli_fetch_row($result);

    $data = mysqli_num_rows($result) ;
    if(($data)==0){
        $sql = "INSERT INTO users (fname, lname, phone, uname, pwd) values ('$firstname','$lastname','$phone','$username','$password')" ;
        if(query){
            return "success" ;
        }
        else{
            return "failed" ;
        }
    }
    else{
        return "This user already exists" ;
    }




}


?>