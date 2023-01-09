<?php
require_once './includes/connection.php';
$std=$_POST["std"];
$first_num=$_POST["first_num"]
$sec_num=$_POST["sec_num"];
$opt=$_POST["opt_value"];
$insert="INSERT into activity values(`$std`,`$first_num`,`opt_value`,`sec_num`)";
$result = mysqli_query($conn, $insert); 
if($row = mysqli_fetch_array($result))
{
    echo "Task Assigned";
}
else
{
    echo "Something Went Wrong !!!"
}
?>