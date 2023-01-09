<?php
require_once './includes/connection.php';

$username = $_POST["username"]; 
$password = $_POST["password"]; 
$select_query = "SELECT password from registration_tb where username='$username'"; 
// echo $select_query; 
$result = mysqli_query($conn, $select_query); 
$row = mysqli_fetch_row($result); 
if ($row == 0)
 { 
echo "Invalid Username"; 
die(); 
} 
if (password_verify($password, $row[0]))
{ 
echo "Login successfully"; 
} 
else 
{ 
echo "Invalid Password"; 
} 
 
