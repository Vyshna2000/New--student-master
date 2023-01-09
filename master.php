<?php
echo '
<html>
    <head>
      <meta charset="utf-8">
      <title>Master Page</title>
    <head>
  <body> 
<a href="./login.php" style="text-align:right;color:black">Logout</a>
<div class="container" style="margin:auto;text-align:center;margin-top:5%"> 
      <div class="main_div" style="background-color:white;height:auto;width:33%;;display:block;margin: 0 auto;"> 
          <div  style="height:min-content;width:500px;"> 
                <div style="color:black;width:100%"> 
                    <h1>Welcome to Master Page</h1> 
                </div> 
                    <button onclick="assign_task();" style="background-color:black;color:#ffc300;border:none;height:25px;border-radius:5px;margin-top:5px;width:160px;margin-bottom:20px;">Assign Task</button>
                    <button onclick="view_task();" style="background-color:black;color:#ffc300;border:none;height:25px;border-radius:5px;margin-top:5px;width:160px;margin-bottom:20px;" >View Submitted Task</button>
          </div>
      </div>
</div>
<div id="task_div" style="display:none;margin-top:5%">
     <table class="table" style="margin:auto;height:fit-content ;border-spacing:12px;border-color:#ffc300"> 
       <div style="color:#ffc300:black;text-align:left"> 
        <h1 style="margin-left: 10px;font-size:large;text-align:center">Task Assign</h1> 
     </div> 
<form class="form" style="height:min-content;width:500px"> 
 <tr> 
   <th style="font-size:small"><label>Select Student</label></th> 
     <td>
      <select id="std" style="border-color:#ffc300;border-radius:3px;" required >';
      $select='SELECT first_name FROM registration_tb where role =="student"'
      $result=mysqli_query($conn,$select); 
   while($row=mysqli_fetch_array($result)) 
     { 
       echo '<option>'.$row[0].'</option>
       </select>"'
     }
       
     '</td> 
       </tr> 
      <tr>
      <th style="font-size:small">
                        <label>Enter First Number</label></th> 
                    <td><input type="number" id="first_num" min="0" max="9" style="border-color:#ffc300;border-radius:3px;" required>
                       </td> 
                    </tr> 
                    <tr>
                        <th style="font-size:small;">Choose Operator</th>
                        <td>
                            <select id="opt_value" style="border-color:#ffc300;color:black;backgoround-clolr:#ffc300;width:50px">
                                <option value="1">+</option>
                                    <option value="2">-</option>
                                        <option value="3">*</option>
                                        <option value="4">/</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <th style="font-size:small">
                        <label>Enter Second Number</label></th> 
                    <td>
                        <input type="number" id="sec_number" min="0" max="9" style="border-color:#ffc300;border-radius:3px;" required></td> 
                    </tr> 
                    <tr>
                        <th>
                        <button onClick="task_submit();" style="background-color:black;color:#ffc300;border:none;height:25px;border-radius:5px;margin-top:5px;width:100px;margin-left:190px;">Submit</button><span id="result"></span></th>
                    </tr>
                </form> 
        </table>
</div>
<div id="view_div" style="display:none;margin-top:5%">
<h1 style="margin-left: 10px;font-size:large;text-align:center;">Submitted Task</h1> 
  <table style="border:1px solid;border-collapse:collapse;width:600px;margin-left:450px;">
    <tr style="text-align:center">
      <th>First Name</th>
      <th>Last Name</th>
      <th>Value1</th>
      <th>Operator</th>
      <th>Value2</th>
      <th>Answer</th>
      <th>Verify</th>
      <th>Result</th>
     </tr>
     <tr style="text-align:center">';
     
      $select="SELECT `first_name`, `last_name`, `value1`, `operation`, `value2`,`result`,status` FROM `activity`";
      $result=mysqli_query($conn,$select); 
      while($row=mysqli_fetch_array($result)) 
        {
          "<td>".$row[0]."</td>
          <td>".$row[1]."</td>
          <td>".$row[2]."</td>
          <td>".$row[3]."</td>
          <td>".$row[4]."</td>
          <td>".$row[5]."/td>"''
        }
        echo'
      <button onclick=\"verify("\.$row[2].,.row[3].,.row[4],.row[5].");\" style=\"background-color:black;color:#ffc300;border:none;height:25px;border-radius:5px;margin-top:5px;width:80px;margin-bottom:10px;\">Verify</button>
      <td>Correct</td> 
</td>
</table>";
?>

<script>
  function assign_task()
  {
    document.getElementById("view_div").style.display="none";
    document.getElementById("task_div").style.display="block";

  }
  function view_task()
  {
    document.getElementById("task_div").style.display="none";
    document.getElementById("view_div").style.display="block";

  }
  function view_submit()
  {
    var std= document.getElementById("std").value;
    var first_num = document.getElementById("first_num").value;
    var sec_num = document.getElementById("opt_value").value;
    var opt_value =document.getElementById("opt_value").value;

    @ajax({
      url:'./task_assign_action.php',
      method:'POST',
      data:{
      std:std,
      first_num:first_num;
      opt_value:opt_value;
      sec_num:sec_num;
      }
    ,
    success:function(result)
    {
      if(result =="Task Assigned")
      {
        alert("successfully added the task");
      }
      else{
        alert("Something Went Wrong");
      }
    }})
  }
function verify(value1,opt,value2,result,status)
  {
 
    if (func === undefined)
     {
		return num;
	     } else 
       {
		return func(num);
	}

function zero(func) {
	return number(0,func);
}
function one(func) {
	return number(1,func);
}
function two(func) {
	return number(2,func);
}
function three(func) {
	return number(3,func);
}
function four(func) {
	return number(4,func);
}
function five(func) {
	return number(5,func);
}
function six(func) {
	return number(6,func);
}
function seven(func) {
	return number(7,func);
}
function eight(func) {
	return number(8,func);
}
function nine(func) {
	return number(9,func);
}
if(opt==1)
{
function plus(value2) 
{
  return function(value1) 
  { 
     var sum= value1 + value2;
     if(sum==result)
     {
      window.location.href="./verify_result.php?status="correct"; 
     }
     else{
      window.location.href="./verify_result.php?status="incorrect"; 
     }
     }
  };
}
}
if(opt==2)
{
function minus(value2) {
  return function(left) {
		var sub= value1 - value2;
	};
}
}
if(opt==3)
{
function times(value2) {
  return function(value1) { 
    var mul= value1 * value2; };
}}
if(opt==4)
{
function dividedBy(value2) {
  return function(value1) 
  { 
    var div= value1 / value2; 
  };
}
}
value1(opt(value2()));
  
</script>
</body>
</html>