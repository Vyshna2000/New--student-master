<?php
require_once './include/connection.php'

$first_name =$_POST["first_name"];
$last_name= $_POST["last_name"];
$email =$_POST["email"];
$role =$_POST["role"];
$username =$_POST["username"];
$password =$_POST["password"];
$insert_qry = "INSERT INTO `registration_tb`(`first_name`, `last_name`, `email`, `role`, `username`, `password`) VALUES (`$first_name`,`$last_name`,`$email`,`$role`,`$username','$password')";
if($row=mysqli_query($conn,$insert))
{
    echo"Signup";
} 
else
{
    echo"Something Went Wrong";
}
?>