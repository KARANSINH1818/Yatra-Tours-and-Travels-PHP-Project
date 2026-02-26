<?php

include "connection.php";

$tours_id = $_POST['tours_id'];
$tours_title = $_POST['tours_title'];
$tours_description = $_POST['tours_description'];
$tours_price = $_POST['tours_price'];
$tours_no_of_days = $_POST['tours_no_of_days'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];


$tours_image ="img/".$_FILES['tours_image']['name'];
move_uploaded_file($_FILES['tours_image']['tmp_name'],$tours_image);



$q="insert into tours(tours_id,tours_title,tours_description,tours_price,tours_no_of_days,tours_image,start_date,end_date) 
    values('$tours_id','$tours_title','$tours_description','$tours_price','$tours_no_of_days','$tours_image','$start_date','$start_date')";

if(mysqli_query($con,$q))
{
    header("Location:admin-view-tours.php");
}else
{
    echo "fail";
}


?>