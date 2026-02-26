<?php

include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$q="insert into users(u_name,u_email,u_password,u_no) 
    values('$username','$email','$password','$mobile')";

if(mysqli_query($con,$q)){
    header("Location:login.php");
}else{

    echo "fail";
}