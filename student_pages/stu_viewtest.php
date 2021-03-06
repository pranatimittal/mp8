<?php
include('config.php');
session_start();
?>

<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

?>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Student View Tests</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};

$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});

</script>
<style>
/* Style the body */
.content {
  flex: 1 0 auto;
}  
body {
  font-family: Arial;
  /* margin: 0; */
}

/* Header/Logo Title */
.header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B;  
  font-size: 15px;
  
}

p{
color:black;
font-size:25px;
}

 .header img {
  float: left;
  width: 150px;
  height: 120px;
  background: #555;
  margin-right:15px;
}
/*.footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  }*/
 

 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
  }

    .navbar {
  overflow: hidden;
  background-color:#555;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}

.manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
      
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 2px solid #dddddd;

  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

@media (max-width: 576px) {
  
  .header{
    font-size:8px;
  }
  .header p{
    font-size:12px;
  }
  .header img{
    width:100px;
    height:80px;
  }
  .navbar a {
   float: left;
   font-size: 12px;
   color: white;
   text-align: center;
   padding: 8px 10px;
   text-decoration: none;
 }
 .main h1{
     font-size: 20px;
   }
th,td{
  font-size:10px;
  padding:2px;
}
table{
  width:100%;
}
 }
</style>
</head>
<body>
<a name="top"></a>
    <div class="content">
<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div>    

 <div class="navbar">
        <a href="stu_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="stu_viewtest.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Take a test</a> 
        <a href="result.php"><i class="fa fa-certificate"></i> View Result</a>
        
        <a href="logout.php"><i class="fa fa-sign-out  fa-logout"></i> Logout</a>
      </div>

<div class="main">
<h1>List Of Tests</h1>
</div>
 
<div class = "manageuser">
  <table align="center">
  <tr>
    <th>SNo.</th>
    <th>Subject Code</th>
    <th>Subject Name</th>
    <th>Test Name</th>
<!--     <th>About</th> -->
    <th>Total Questions</th>
    <th>Marks for Correct Answer</th>
    <th>Marks for Incorrerct Answer</th>
    <th>Total Marks</th>
    <th>Time Limit</th>
    <th>Take Test</th>  
  </tr>

    <?php
    
  
  $result = mysqli_query($con,"SELECT * FROM quiz") or die('Error');
$c=1;

while($row = mysqli_fetch_array($result)) {
  $sn = $row['name'];
  $tn =  $row['title'];
  $sc = $row['subjcode'];
  $tq = $row['totalques'];
  $tm = $row['correct'] * $tq;
  $cor= $row['correct'];
  $wro= $row['wrong'];
  $tl = $row['time'];
  $in=$row['intro'];
  $eid=$row['quizid'];
  //$attemp="idk";

  echo '<tr><td>'.$c++.'</td><td>'.$sc.'</td><td>'.$sn.'</td><td>'.$tn.'</td><td>'.$tq.'</td><td>'.$cor.'</td><td>'.$wro.'</td><td>'.$tm.'</td><td>'.$tl.' min </td>
  <td><a title="Take Test" href="taketest1.php?tid='.$eid.'&corr='.$cor.'&wron='.$wro.'&tq='.$tq.'&tn='.$sn.'&d='.$in.'"><i>Take Test</i></a></td></tr> ';
}


$c=0;
echo '</table></div>';

?>


</div> 
    
    <?php
include('../footer.php');
?>

</body>
</html>
