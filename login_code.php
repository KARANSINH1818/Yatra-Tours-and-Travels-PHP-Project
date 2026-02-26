<?php
session_start();

include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$qadmins = "select * from admins where email='$username' and password='$password'";
$qusers = "select * from users where u_email='$username' and u_password='$password'";

$rsAdmins = mysqli_query($con,$qadmins);
$rsUsers = mysqli_query($con,$qusers);

if($rowUser = mysqli_fetch_array($rsUsers)){
    $_SESSION["users"] =  $rowUsers;
    header("Location:index.php");
}
else if( $rowAdmin = mysqli_fetch_array($rsAdmins)){
    $_SESSION["admins"] =  $rowAdmins;
    header("Location:admin-home.php");}
else{
    echo "invalid username or password";
}
?>