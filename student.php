<?php
'
<html>
    <head>
        <title>Student Page</title>
</head>
<body>
    <style>
    </style>
<a href="./login.php" style="text-align:right;color:black">Logout</a>
<div class="container" style="margin:auto;text-align:center;margin-top:5%"> 
        <div class="main_div" style="background-color:white;height:150;width:33%;display:block;margin: 0 auto;"> 
                <div  style="height:min-content;width:500px"> 
                <table class="table" style="margin:auto;height:fit-content ;border-spacing:12px;border-color:black"> 
                <div style="color:black;width:100%"> 
                    <h1>Welcome to Student page</h1> 
                    <button  style="background-color:black;color:#ffc300;border:none;height:25px;border-radius:5px;margin-top:5px;width:150px;margin-bottom:10px;" onclick="complete_activity();">Completed Activity</button>
                    <button  style="background-color:black;color:#ffc300;white;border:none;height:25px;border-radius:5px;margin-top:5px;width:150px;margin-bottom:10px;" onclick="pending_activity();">Pending Activity</button>
                 </table>    
                </div>
        </div>
</div>
<div id="sec_div" style="display:none;margin:auto;text-align:center;margin-top:5%"> 
        <div  style="margin:auto;text-align:center;background-color:white;height:auto;">
         <h1 style="margin-left: 10px;font-size:large;text-align:center;color:#ffc300">Completed Actvity</h1>
        <table style="border:1px solid;border-collapse:collapse;width:600px;margin-left:450px">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Value1</th>
                <th>Operator</th>
                <th>Value2</th>
                <th>Answer</th>
                <th>Status</th>
            </tr>';
           
            
                $select = "SELECT * FROM activity";
                $result =mysqli_query($conn,$select); 
                while($row=mysqli_fetch_array($result)) 
                 {
         echo'<tr style="text-align:center">
          '"<td>".$row[0]."</td>
          <td>".$row[1]."</td>
          <td>".$row[2]."</td>
          <td>".$row[3]."</td>
          <td>".$row[4]."</td>
          <td>".$row[5]."/td>
          </tr>'";
        }
'</tr>
</table>
</div>
</div>
<div id="third_div" style="display:none;margin:auto;text-align:center;background-color:white;height:auto;margin-top:5%">
<div  style="margin:auto;text-align:center;background-color:white;height:auto;">
         <h1 style="margin-left: 10px;font-size:large;text-align:center;color:#ffc300">Pending Activity</h1>
        <table style="border:1px solid;border-collapse:collapse;width:600px;margin-left:450px;">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Value1</th>
                <th>Operator</th>
                <th>Value2</th>
                <th>Answer</th>
                <th>Do</th>
            </tr>'
            $select="SELECT * FROM activity";
                $result=mysqli_query($conn,$select); 
                while($row=mysqli_fetch_array($result)) 
                 {
                    '<tr style="text-align:center">
          '"<td>".$row[0]."</td>
          <td>".$row[1]."</td>
          <td>".$row[2]."</td>
          <td>".$row[3]."</td>
          <td>".$row[4]."</td>
          <td>".$row[5]."/td>"
        
            '<td><input type="number" id="answer">
            <td><button style="background-color:black;color:#ffc300;border:none;height:25px;border-radius:5px;margin-top:5px;width:100px;margin-bottom:10px;">submit</button>
                 </tr>'}';
</table>
</div>
</div>';
?>
<script>
    function complete_activity()
    {
        document.getElementById("third_div").style.display="none";
        document.getElementById("sec_div").style.display="block";
    }
    function pending_activity()
    {
        document.getElementById("sec_div").style.display="none";
        document.getElementById("third_div").style.display="block";
    }
    </script>
</body>
</html>

         

