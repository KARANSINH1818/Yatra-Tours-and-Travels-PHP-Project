<?php

include "connection.php";

$f_id = $_POST['f_id'];
$u_id = $_POST['u_id'];
$f_rating = $_POST['f_rating'];
$f_comments	 = $_POST['f_comments'];
$f_date = $_POST['f_date'];

$q="insert into feedbacks(f_id,u_id,f_rating,f_comments,f_date) 
    values('$f_id','$u_id','$f_rating','$f_comments','$f_date')";

if(mysqli_query($con,$q)){
    header("Location:contact.php");
}else{

    echo "fail";
}