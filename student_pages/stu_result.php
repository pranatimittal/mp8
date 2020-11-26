<?php
include('config.php');
error_reporting(1);
session_start();
?>

<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
function preback(){window.history.forward();}
setTimeout("preback()",0);
window.onunload=function(){null};
</script>
<title>Page Title</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>

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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
  background-color: rgb(226, 221, 221);
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
    color:black;
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
/* .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
} */

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
  border: 2px solid rgb(204, 200, 200);
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #d8d4d4;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  
}
.result{
  margin-left: 3%;
  margin-right: 3%;
  background-color: white;
}

input[type=button] {
  width: auto;
  background-color: #4CAF50;
  color: white;
  margin-left:45%;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
​
input[type=button]:hover {
  background-color: #45a049;
}
.hover-item:hover{
  background-color: #3e8e41;
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
 .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}
 .main h1{
     font-size: 25px;
   }
   input[type=button] {
  margin-left:35%;
}
 }
</style>
<!-- <script type="text/javascript"> 
  history.pushState(null, null, location.href);
   window.onpopstate = function () {
   history.go(1); };

  </script> -->

  <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
  <title>Student Results</title>
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
        <br>
        <br>
 <div class="result">
    
<div class="main">
<h1>Result</h1>
</div>
<div class = "manageuser">
  <table align="center">
  
  
 <?php
   
   $count=1;
   $response="";

   //echo '<fieldset>';

$testid=$_SESSION['TestId'];
// $sql=mysqli_query($con,"SELECT * FROM ques WHERE quizid='$testid'") or die('Error');
   
//        while($row=mysqli_fetch_array($sql))
//        {

//           echo ' <h3 class="center">Question.'.$count.': '.$row['ques'].'</h3>';
    
//           $quesid=$row['qid'];

//           $sql1=mysqli_query($con,"SELECT * FROM answer WHERE qid='$quesid'") or die('Error1'); 

//              while($row2=mysqli_fetch_array($sql1))
//             {
//               $ans=$row2['ansid'];
            
//              $sqp=mysqli_query($con,"SELECT * FROM options WHERE optionid='$ans'") or die('Error2'); 

//              while($row3=mysqli_fetch_array($sqp))
//                 {
//                   $ops=$row3['option'];
//                   echo "answer.".$count.": ".$ops."";
//                 }
//             }
//              $count++;
//              echo " <br> ";
// }
//         echo '</form></div></div></div><br><br>'; 

   $C=0;
   $W=0;
   $S=0;
$sql1=mysqli_query($con,"SELECT * FROM ques WHERE quizid='$testid'") or die('Error1');
   //echo "submit innnnnnn";
       while($row1=mysqli_fetch_array($sql1))
       {
          $quesid=$row1['qid'];
          $answer=$_POST[$quesid];
          //echo "<br>";
     //echo "--".$answer ."--a";
          

          echo ' <h3 class="center">Question.'.$count.': '.$row1['ques'].'</h3>';
             if($answer=="")
                {$answer=0;}
              
              if($answer!=0)
              {
                $q=mysqli_query($con,"SELECT * FROM options WHERE optionid='$answer' ") or die('Error2'); 

                 while($r=mysqli_fetch_array($q))
                   {
                      $o=$r['option'];
                      $response=$response."$o@";  
                      //echo $response;               
                   }
               }
               else
               {
                  $response=$response."Unattempted@";  
                 // echo $response;  
               }


                 $sql2=mysqli_query($con,"SELECT * FROM answer WHERE qid='$quesid'");
                 
                 while($row=mysqli_fetch_array($sql2))
                 {
                 $ans_stud=$row['ansid'];

                 $sqp=mysqli_query($con,"SELECT * FROM options WHERE optionid='$ans_stud'") or die('Error2'); 

                 while($row3=mysqli_fetch_array($sqp))
                    {
                      $ops=$row3['option'];
            
                     //echo $ans_stud;
                     if($answer == 0)
                     {
                       $S++;
                       echo "<h4 style='color:blue'> Answer ".$count.":  ".$ops."</h4>";  
                                    
                     }
                     else
                     {
                        if($ans_stud == $answer)
                         {
                            $C++;  
                            echo "<h4 style='color:green'> Answer ".$count.": ".$ops."</h4>";
                            
                         }
                        else
                         {
                            $W++;
                           echo "<h4 style='color:red'> Answer ".$count.": ".$ops."</h4>";
                           
                         }
                     }
                     $count++;
                     
                    }
                  }

              }
        

        // echo $C;
        //  echo $W;
            $date=date('d-m-Y');

            $c=$_SESSION['Correct'];
            $w=$_SESSION['Wrong'];

            $e=$_SESSION['Email'];

           $score=($C * $c ) -($W * $w);
       
         echo "<tr><th style='color:green'>Right Answer <i class='fa fa-check' style='color:green'></i></th>
    <th>".$C."</th></tr><tr><th style='color:red'>Wrong Answer <i class='fa fa-times' style='color:red'></i></th><th>".$W."</th></tr><tr><th style='color:blue'>Unattempted Question </th><th>".$S."</th></tr>";
 
  echo  "<tr><th style='color:rgb(82, 202, 241)'>Score <i class='fa fa-star' style='color:rgb(82, 202, 241)'></i></th><th>$score</th></tr><br><br>";

  $que= mysqli_query($con, "SELECT * FROM history where email='$e' and quizid='$testid'");
      
      if($data=mysqli_fetch_array($que))
        {
            echo "<script>alert('You cannot attempt the test twice.')</script>";
            echo "<script>window.location.href='stu_home.php'</script>";
        }

        else
        {
             $ins_res=mysqli_query($con," INSERT INTO  history VALUES ( '','$e','$testid','$score','$C','$W','$S','$date','$response' )") or die(Error);
    
        }
     
    $CNT=0;
    $sql12=mysqli_query($con," SELECT * FROM rank WHERE email='$e' ");
    while($row12 = mysqli_fetch_array($sql12)) {
     $CNT++;
     }
    
    if($CNT==0)
    {
          $ins_val=mysqli_query($con," INSERT INTO  rank VALUES ( '$e', '0')");

    }

    $sql11=mysqli_query($con," SELECT * FROM rank WHERE email='$e' ");
    while($row11 = mysqli_fetch_array($sql11)) {
      $s = $row11['score'];
     

     $snew=$s+$score;

    $sql12=mysqli_query($con," UPDATE rank SET score='$snew' WHERE email='$e' "); 
    }
    ?>

 
 </table>
 <br>
</div>
<?php
echo '<a href="test_fb.php?tid='.$testid.'"><input type="button" class="hover-item" value="Give Feedback"></a>'
?>
</div>

   
<br>
<br>


</div> 
    
    <?php
include('../footer.php');
?>

 <!--<h1><a href="#" rel="index,follow">Just Web Code</a></h1>
-->
</body>
</html>
