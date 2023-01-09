<?php

require_once '/includes/include.php';
$status = $_POST["result"];
$insert = "INSERT INTO activity (`status`) values(`$status`)";
if(mysqli_query($con,$insert))
{
    echo "verified";
}
   else{

   } echo"something went wrong"


?>