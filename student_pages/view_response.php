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

<?php
    $hid=$_GET["hid"];
    $res=$_GET["ans"];
    $qid=$_GET["qid"];
    $ri=$_GET["ri"];
    $wr=$_GET["wr"];
    $un=$_GET["un"];
    $_SESSION["hid"]=$hid;

?>

<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>View Responses</title>
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

#chart-container {
    width: 100%;
    height: auto;
    text-align:center;
}

#bodyofchart {
     margin-left:auto;
     margin-right:auto;
     margin-bottom:5%;
     margin-top:5%;
     width: 35%;
     padding: 20px;
     height: auto;
     box-shadow: 0 4px 8px 0 grey;
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
  text-align: center;
  background-color: #fff;
  color: white;
}
.tooltip {
  position: relative;
  display: inline-block;
  /* border-bottom: 1px dotted black; */
}

.tooltip .tooltiptext {
  visibility: hidden;
  font-size:15px;
  width: 200px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 5px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
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
  font-size:15px;
  padding:5px;
}
#bodyofchart{
 
  width:300px;
  height:150px;
  
}
.tooltip .tooltiptext {
  font-size:10px;
  width: 120px;
  padding: 5px 5px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}
 }
</style>
 <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
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
<h1>Response </h1>
</div>
 
<div class = "manageuser">
  <table align="center">
  <tr>
    <th style="background-color:black;color:white;">SNo.</th>
    <th style="background-color:black;color:white;">Question</th>
    <th style="background-color:black;color:white;">Response</th>
  </tr>

    <?php
  
  $ans_array=explode("@",$res);
  $result = mysqli_query($con,"SELECT ques FROM ques WHERE quizid='$qid' ") or die('Error');
  $c=1;

while($row = mysqli_fetch_array($result)) {
  $q = $row['ques'];
  $c1=$c;
  echo '<tr><td>'.$c++.'</td><td>'.$q.'</td><td>'.$ans_array[$c1-1].'</td></tr> ';

}

echo '</table></div>';

?>

<br><br>

  <div id="bodyofchart">
        <div id="chart-container">
        <canvas id="graphCanvas1"></canvas>
    </div>
</div>
    <script>
        $(document).ready(function () {
            showGraph2();
        });

        function showGraph2()
        {
            {
              
                $.post("sdata.php" ,
                function (data)
                {
                    console.log(data);
                    var r = data[0];
                    var w = data[1];
                    var u = data[2];

                    var chartdata = {
                        labels:['Correct Answer', 'Wrong Answer','Unattempted'],
                        datasets: [
                            {
                                label: 'Responses ',
                                backgroundColor: [
                                        'rgba(0, 204, 0, 0.9)',
                                        'rgba(230, 46, 0, 0.9)',
                                        'rgba(0, 115, 230, 0.9)'
                                        ],
                                hoverBackgroundColor:[
                                        'rgba(0, 204, 0, 1)',
                                        'rgba(230, 46, 0, 1)',
                                        'rgba0, 115, 230, 1)' 
                                        ],
                                data: [r,w,u]
                            }
                        ]
                    };

                    var option = {
                      rotation: 1 * Math.PI,
                      circumference: 1 * Math.PI
                     };

                    var graphTarget = $("#graphCanvas1");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options:option
                    });
                });
            }
        }

        
        </script>

<?php
 //pertcent of correct responses
      $tq=$c-1;

      $pc=($ri/$tq)*100;
      //echo $pc;echo " %  - correct %";
      //pertcent of wrong responses
      $pw=($wr/$tq)*100;
      //echo $pw;echo " %  - wrong %";
      //pertcent of unattempted responses
      $pu=($un/$tq)*100;
      //echo $pu;echo " %  - unattempted %";

?>

<div class = "manageuser">
  <table align="center">
  <tr>
  
    <th style="color:green;"><div class="tooltip">Percentage of correct answers <i class='fa fa-check' style='color:green'></i><span class="tooltiptext">It shows the percentage of the correct answers</span>
    </div></th>
    <td><?php echo $pc."%"; ?></td> 
  </tr>
  <tr>
    <th style='color:red'><div class="tooltip">Percentage of wrong answers <i class='fa fa-times' style='color:red'></i><span class="tooltiptext">It shows the percentage of the wrong answers</span>
    </div></th>
    <td><?php echo $pw."%"; ?></td> 
  </tr>
  <tr>
    <th style='color:blue'><div class="tooltip">Percentage of unattempted answers <span class="tooltiptext">It shows the percentage of the unattempted answers</span>
    </div></th>
    <td><?php echo $pu."%"; ?></td> 
  </tr>
  </table>
  </div>


</div> 
    
    <?php
include('../footer.php');
?>

</body>
</html>
