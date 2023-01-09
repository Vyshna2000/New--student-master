<?php
?>
<html>
    <head>
        <title>Signup</title>
    </head>
<body>
<div id="main_div" style="margin:auto;text-align:center;margin-top:5%">
    <div class="container" style="background-color:white;height:250;width:33%;display:block;margin: 0 auto;">
    <form>
        <table id="tbl" style="margin:auto;height:fit-content ;border-spacing:12px;border-color:#003B9D" >
        <h1>Sign Up<h1>
    <tr>
        <td>
        <input type="text" id="firstname" placeholder="First Name" required style="width:250px;height:30px;border:solid;border-radius:3px">
       </td>
    </tr>
<tr>
    <td>
        <input type="text" id="lastname" placeholder="Last Name" required style="width:250px;height:30px;border:solid;border-radius:3px">
</td>
<tr>
    <td>
        <input type="email" id="email" placeholder="Email" required style="width:250px;height:30px;border:solid;border-radius:3px">
</td>
<tr>
    <tr>
        <td>
            <select  id="role" style="width:250px;height:30px;border:solid;border-radius:3px" >
                <option value="student">Student</option>
                <option value="master">Master</option>
           </select>
    <td>
</tr>
<td>
     <input type="text" id="username" placeholder="Username" required style="width:250px;height:30px;border:solid;border-radius:3px">
</td>
<tr>
    <td>
     <input type="password" id="password" placeholder="Password" required style="width:250px;height:30px;border:solid;border-radius:3px">
</td>
</tr>
<tr style="text-align:center">
    <td>
    <button onclick="signup();" style="height:30px;width:150px;background-color:black;color:white;border:none">SignUp</button>
    <br>
    <p>Already a member ? <a href="./login.php" style="color:black">Login </a>
</form>
</td>
</tr>
</body>
<script>
function signup()
{
    var first_name = document.getElemetById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var email = documement.getElementById("email").value;
    var role= document.getElementById("role").value;
    var usr = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

$.ajax({ 
url: "signup_action.php", 
method: "POST", 
data: { 
    first_name:first_name,
    last_name:last_name,
    email:email,
    role:role,
    username: usr, 
    password: pass
}, 
    success: function(result)
            { 
                console.log(result); 
                if (result != "signup") 
                         { 
                            alert("Something Went Wrong !!!!!!")
                         } 
                else 
                   { 
                    window.location.href = "./login.php"; 
                   } 
             } 
    }) 
    } 
</script> 
</html>
