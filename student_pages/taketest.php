<?php
include('config.php');
session_start();
$val=0;
$try=0;
	?>

	<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

?>
	<?php
	$ttid=$_GET["tid"];
	
	
	$result = mysqli_query($con,"SELECT time FROM quiz where quizid='$ttid'") or die('Error');


while($row = mysqli_fetch_array($result)) {
	
	$val=$row['time'];
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Take Test</title>
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

$(document).keypress(
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});



var ctrlKeyDown = false;

$(document).ready(function(){    
    $(document).on("keydown", keydown);
    $(document).on("keyup", keyup);
});

function keydown(e) { 

    if ((e.which || e.keyCode) == 116 || ((e.which || e.keyCode) == 82 && ctrlKeyDown)) {
        // Pressing F5 or Ctrl+R
        e.preventDefault();
    } else if ((e.which || e.keyCode) == 17) {
        // Pressing  only Ctrl
        ctrlKeyDown = true;
    }
};

function keyup(e){
    // Key up Ctrl
    if ((e.which || e.keyCode) == 17) 
        ctrlKeyDown = false;
};



</script>

<style>

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
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
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}
input[type=submit] {
  width: 10%;
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
.question{
    margin-left: 1%;
    margin-right: 1%;
}

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}
​
/* Header/Logo Title */
.header {
  position: relative;
  padding: 40px;
  background: white;
  color: #21610B;  
  font-size: 10px;
  
}
p{
color:black;
font-size:15px;
}
​
 .header img {
  float: left;
  width: 150px;
  height: 120px;
  background: #555;
}
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
​
    .navbar {
  overflow: hidden;
  background-color:#555;
}
​
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
​
input[type=submit]:hover {
  background-color: #45a049;
}
.question{
    margin-left: 1%;
    margin-right: 1%;
}
​
.alamgir{
	font-family: "Times New Roman", Georgia, Serif;
	 color:#05020d;
	 font-size: 20px;
}
.button1{
  background-color:rgb(204, 198, 198);;
  color:black;
  padding-left:10px;
  padding-right:10px;
  padding-top:0px;
  padding-bottom:0px;
  text-align:center;
  display:inline-block;
  font-size:15px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:12px;
  float:right;
  margin-right:15px;
 
}
.content {
  flex: 1 0 auto;
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
 input[type=submit]
 {
   font-size:12px;
   width:20%;
   
 }
 }
</style>
<script type="text/javascript">
function preback(){window.history.forward();}
setTimeout("preback()",0);
window.onunload=function(){null};
</script>

</head>
<body>
​<a name="top"></a>
    <div class="content">
<div class="header" style="margin-left:-20px;margin-top:-20px; position:fixed; overflow:hidden; width:100%;">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  
​
 <div class="navbar" style="position:fixed; overflow:hidden; width:100%;">
        <a href="stu_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="stu_viewtest.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Take a test</a> 
        <a href="result.php"><i class="fa fa-certificate"></i> View Result</a>
    
        <a href="logout.php"><i class="fa fa-sign-out  fa-logout"></i> Logout</a>
     
<button class="button button1">
<div id="countdown"></div>
<div id="notifier"></div>
</button>	 </div></div>  
<br><br><br><br><br>
​<br><br><br><br><br>
​<br><br>

<html>
<body>

 <script type="text/javascript">
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
	document.getElementById("notifier").style.color = "black";
    document.getElementById("notifier").style.marginRight = "45px";
    document.getElementById("countdown").style.marginRight = "100px";
    document.getElementById("notifier").style.fontFamily = "Arial";
    document.getElementById("notifier").style.fontSize = "20px";
    document.getElementById("countdown").style.fontFamily = "Arial";
    document.getElementById("countdown").style.fontSize = "30px";
    document.getElementById("countdown").style.textAlign = "right";
    document.getElementById("notifier").style.textAlign = "right";
  }
 
  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 1 ? 0 : x%60);
  }
 
  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
		  
         remain -= 1;
         setTimeout(arguments.callee, 1000);
		
		  <?php if($try==3)
		   {		   
	   echo $try;
			   ?>
			   remain=0;
			   <?php
		   }
		   ?>
       }
     if(remain==0)
     {
       
       document.getElementById("sub").click(); 
      // window.location.href = "stu_result.php";
     }
    })(); // End countdown
  }
 var spge = '<?php echo $val ;?>';
 spge*=60;
  setTimer(spge, {
    60: function () { display("notifier", "Just 1 minute to go"); },
     15: function () { display("notifier", "15 seconds left");        },
     0: function () { display("notifier", "Time is up");       }
  });
})();
 
</script> 
</body>
</html>
​

​<div id="countdown"></div>
<div id="notifier"></div>
<div class="alamgir">
		<h2 style="color:maroon; height:30px; text-align:center;">Your Exam is Running</h2>
		</div>
    ​
​
 
<div class="row">
<span class="title1" style="margin-left:45%;font-size:30px;"><b>Test</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">
 <form action="stu_result.php" method="post" >
 
​
<?php
$count=1;
  
  	$ttid=$_GET["tid"];
    $_SESSION['TestId']=$ttid;

  	$tot=$_GET["tq"];

    $corr=$_GET["corr"];
    $_SESSION['Correct']=$corr;

    $wro=$_GET["wron"];
    $_SESSION['Wrong']=$wro;

  
  echo '<fieldset>';
           
	$sql=mysqli_query($con,"SELECT * FROM ques WHERE quizid='$ttid'")or die('Error');
	while($row=mysqli_fetch_array($sql))
	{
		
 // PUT AS PHP
  //  echo $row['ques'];
    echo ' &nbsp;<h3 class="center">Question .'.$count.': '.$row['ques'].'</h3>';
	
	if($row["image"]>0){
		?>    
		
		
		&nbsp;&nbsp;&nbsp;<img src="../faculty_pages/upload/<?php echo $row["image"];?>" height="200px" width="200px" alt=""/>
		<br><br>
<?php
	}
		$count++;
		$quesid= $row['qid'];
    $sql1=mysqli_query($con,"SELECT * FROM options WHERE qid='$quesid'") or die('Error'); 
    $a='a';
	while($row1=mysqli_fetch_array($sql1))
	{$op=$row1['option'];
    $opid=$row1['optionid'];
   echo '&nbsp;&nbsp;&nbsp;'; echo $a++ .')<input type="radio" name="'.$quesid.'" value="'.$opid.'">'.$op.'</br>';
	
  }
  $a='a';
  echo " <br> ";
}
echo '<input id="sub" style="margin-left:45%;" type="submit" value="SUBMIT"/>';
echo '</form></div></div></div>';								   
	?>									
​
<script>
$(window).blur(function() {
   alert('You are not allowed to leave page at any cost.');
  <?php $try++;
  echo $try;
  ?>
   //do something else
});

</script>

</div> 
    
    <?php
include('../footer.php');

?>
</body>
</html>	