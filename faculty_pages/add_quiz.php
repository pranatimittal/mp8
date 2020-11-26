<?php
include('config.php');
session_start();
?>

<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}

//else{
	
	//echo $_SESSION['idf'];
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  }
*/ 

 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
  }
  .adminpanel{
    width:500px;
    color:#897073;
    margin:30px auto 0;
    padding:50px;
    border:2px solid #ddd;
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 20px;
    } 
    .manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
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

/*.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}*/

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}

/*.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: rgba(165, 161, 161, 0.397);
}

.dropdown:hover .dropdown-content {
  display: block;
}
*/
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.quiz {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}
textarea{
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  }
  .navbar .icon {
  display: none;
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
     .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
  .navbar.responsive {position: relative;}
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar a:hover{
  background-color: #ddd;
  color: black;
}

  .navbar a.active {
  background-color: #4CAF50;
  color: white;
}

 }
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Add Quiz</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 


<div class="navbar" id="myTopnav">
        <a class="active" href="fac_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="manageuser.php"><i class="fa fa-users" aria-hidden="true"></i> Manage User</a> 
        <a href="add_quiz.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Quiz</a>

         
        <a href="viewtest.php"><i class="fa fa-eye" aria-hidden="true"></i> View Test</a>
        <a href="f_testresult.php"><i class="fa fa-address-card-o" aria-hidden="true"></i> View Result</a>
        <a href="f_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
      </div>
      <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
</br>
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Test Details</b></span><br /><br />

<form method="post" class="form-horizontal title1" style="margin-left:450px;">
<input type="text" id="scode" name="subjectcode" placeholder="Enter subject code" required>
<input type="text" id="sname" name="subjectname" placeholder="Enter subject name" required>
                      
<input type="text" name="t" placeholder="Enter title of test" required>
<input type="text" name="tq" placeholder="Enter total number of questions" required>
<input type="text" name="c" placeholder="Enter marks for correct answer" required>
<input type="text" name="w" placeholder="Enter marks for wrong answer" required>
<input type="text" id="tlimit" name="timelimit" placeholder="Enter time limit" required>
<br>
<textarea cols="61" rows="8" name="description" placeholder=" Please mention the instructions for the test." ></textarea>
<br>
<input type="text" id="tpwd" name="password" placeholder="Enter test key" required >                       
<input type="submit" value="Click here to enter question details" name="sub">
</form>
<?php
if(isset($_POST["sub"]))
{
	$qid=mt_rand(1, 2000000);
	$sub_code=$_POST["subjectcode"];
	$sub_name=$_POST["subjectname"];
  $pass=$_POST["password"];
 $title1= $_POST["t"];
 $totalq= $_POST["tq"];
 $cor= $_POST["c"];
 $wro= $_POST["w"];
 $des=$_POST["description"];
 $d=date("d-m-Y");
$time_limit= $_POST["timelimit"];
$_SESSION["x"]=$totalq;
$_SESSION["y"]=$qid;
 
 $idf= $_SESSION['idf'];

	$m=1;
	$j=1;
   $query = "INSERT INTO quiz(quizid, subjcode, name, title,intro, totalques,correct, wrong,time,date,testkey, teacher_id) values ('$qid','$sub_code','$sub_name','$title1','$des','$totalq','$cor','$wro', '$time_limit','$d','$pass', '$idf')";
  $row= mysqli_query($con,$query)or die('Error');
  if($row > 0)
	{
	echo "<script>alert('Record Save');</script>";
	$_SESSION['totalq'] = $totalq;
	$_SESSION['qid']=$qid;
	$_SESSION['m']=$m;
	$_SESSION['j']=$j;
		  echo "<script>window.location.href='add_ques.php'</script>";
	}
	else
	{
	echo "<script>alert('not Save');</script>";
	}
  }
?>



</div> 
    
    <?php
include('../footer.php');
?>  
</body>
</html>