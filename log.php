<?php

?>
<style> 
</style> 
<body> 
<center> 
<div class="container" style="margin:auto;text-align:center;margin-top:5%"> 
<div class="main_div" 
style="background-color:white;height:250;width:33%;box-shadow:10px 10px 10px 10px #c9dae7;display:block;margin: 0 auto;"> 
<div  style="height:min-content;width:500px"> 
<table class="table" 
style="margin:auto;height:fit-content ;border-spacing:12px;border-color:#003B9D"> 
<div style="color:blue;width:100%"> 
<h1>Login</h1> 
</div> 
<tr> 
<th style="font-size:small">
    <label>Username</label></th> 
<td>
    <input type="text" id="username" style="border-color:#85b4fc;border-radius:3px;" required></td> 
</tr> 
<tr> 
<th style="font-size:small">
    <label>Password</label></th> 
<td>
    <input type="password" id="pass" style="border-color:#85b4fc;border-radius:3px;" required></td> 
</tr> 
<tr> 
</table> 
<button onClick="login();" style="background-color:003B9D;color:white;border:none;height:25px;border-radius:5px;margin-top:5px;width:80px;">Submit</button> 
<br> 
</div> 
<button 
style="background-color:white;color:black;border:none;height:25px;border-radius:5px;margin-top:10px;width:auto" 
onclick="registration();">SignUp</button> 
</div> 
</div> 
<div class="container" style="margin:auto;text-align:center;margin-top:5%;height:auto"> 
<div class="main_div" 
style="background-color:white;height:200px;width:33%;box-shadow:10px 10px 10px 10px #c9dae7;display:block;margin: 0 auto; display:none" 
id="sec_div"> 
<form class="form" style="height:min-content;width:500px"> 
<table class="table" 
style="margin:auto;height:fit-content ;border-spacing:12px;border-color:#003B9D"> 
<div style="color:#003B9D;text-align:left"> 
<h1 style="margin-left: 10px;font-size:large;text-align:center">Sign Up</h1> 
</div> 
<tr> 
<th style="font-size:small"><label>Username</label></th> 
<td><input type="text" name="user" 
style="border-color:#85b4fc;border-radius:3px;" required></td> 
</tr> 
<tr> 
<th style="font-size:small"><label>Password</label></th> 
<td><input type="password" name="password" style="border-color:#85b4fc;border-radius:3px;" required> 
</td> 
</tr> 
<tr> 
<th style="font-size:small"><label>Retype password</label></th> 
<td> 
<input type="password" name="re_password" 
style="border-color:#85b4fc;border-radius:3px;" required> 
</td> 
</tr> 
</table> 
<button name="sign" 
style="background-color:003B9D;color:white;border:none;height:25px;border-radius:5px;margin-top:5px;width:80px;">Submit</button> 
</form> 
</div> 
</div> 
<script> 


function login()
 {
    var username = document.getElementById("username").value;
    var pass = document.getElementById("pass").value;
    if(username == "student" && pass == "123")
    {
        alert("Student Login Successfully");
        window.location="student.html";
    }
    else if(username == "master" && pass == "123")
    {
       alert("Master Login Successfully");
       window.location="master.html";
    }
    else{
        alert("Someting Went Wrong");
    }
 }
function registration() 
  { 
document.getElementById("sec_div").style.display = "block"; 
var usr =document.getElementById("user").value;
var pass =document.getElementById("password").value;
var re_pass=document.getElementById("re_password").value;
  }
</script> 
</body>
</html> 
