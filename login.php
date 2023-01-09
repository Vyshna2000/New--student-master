<?php
include './includes/header.php'; 
?>
<style> 
</style> 
<body> 
<div class="container" style="margin:auto;text-align:center;margin-top:5%"> 
<div class="main_div" 
style="background-color:white;height:250;width:33%;display:block;margin: 0 auto;"> 
<div  style="height:min-content;width:500px"> 
<table class="table" 
style="margin:auto;height:fit-content ;border-spacing:12px;border-color:#003B9D"> 
<div style="width:100%"> 
<h1>SPRINTILE</h1>
<h2>Good To See You Again !</h2>
<form>
<h3>Sign In</h3> 
</div> 
<tr> 
<tr>
    <td>
     <input type="text" id="username" name="username" placeholder="Username" required style="width:250px;height:30px;border:solid;border-radius:3px">
</td>
<tr>
    <td>
     <input type="password" id="password" name="password" placeholder="Password" required style="width:250px;height:30px;border:solid;border-radius:3px">
</td>
</tr>
<td>
<p style="margin-right:140px;margin-bottom:0px;margin-top:0px"><input type="checkbox">Remember me</p>
<br>
<button onClick="login();" style="margin-left:50px;height:30px;width:150px;background-color:black;color:#ffc300;border:none">Sign In</button> 
<br> 
</div>
<a href="#" style="color:#ffc300;">Forgot Password ?</a>
<p>Don't have an account ?&nbsp;&nbsp;<a href="signup.php" style="color:#ffc300">SignUp</a>
</div> 
</div> 
</form>

<script> 
function login()
 {
    var usr = document.getElementById("username").value;
    var pass = document.getElementById("password").value;
  if(usr == "")  
     { 
     alert("Please Enter a valid useraname");
     } 
     if (pass == "") 
      { 
        alert("Please Enter a valid password");
        } 
$.ajax({ 
url: "login_action.php", 
method: "POST", 
            data: { 
            username: usr, 
            password: pass
            }, 
                success: function(result) { 
                console.log(resulst); 
                if (result == "Login successfully") 
                { 
                    if (usr =="master") 
                    { 
                    window.location.href = "./master.php"; 
                    } 
                    else
                    { 
                    window.location.href = "./student.php"; 
                    } 
                } 
                else{
                    alert("Something Went Wrong");
                }
                    } 
        }) 
} 
</script> 
 
<?php 

include './includes/footer.php'; 

?> 
