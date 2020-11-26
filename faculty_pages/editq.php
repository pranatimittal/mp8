<?php
include('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Edit Questions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
/* .footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  } */
 

 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
  }
  /* .adminpanel{
    width:500px;
    color:#897073;
    margin:30px auto 0;
    padding:50px;
    border:2px solid #ddd;
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 20px;
    }*/ 
    /* .manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
    }   */

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
  .content {
  flex: 1 0 auto;
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
<br>
<div class="row">
​
​
 
<div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">
 <form class="form-horizontal title1" name="form" method="POST" >
 <fieldset>
​
​
 <?php
 
   $m=1;
   $i=1;
 
    if(@$_GET['qid'] and @$_GET['tid'] and @$_GET['tname'] and @$_GET['ques']) 
    { 
      $tid=$_GET['tid'];
      $_SESSION['ttid']=$tid;
      $tn=$_GET['tname'];
      $_SESSION['ttname']=$tn;
      $qid=$_GET['qid'];
      $_SESSION['qqid']=$qid;
      $q=$_GET['ques'];
      $_SESSION['qq']=$q;
    }
    else
    {
      echo "login again";
    }

?>

<br>
<div style="margin-left:460px;"><b>Question number: <?php echo $m; ?><br /></div>
<br>
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
  <div class="col-md-12">
  
  <?php
  echo '<textarea style="margin-left:35%;font-size:15px; width:420px; height:100px;"  name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here...">'.$_GET['ques'].'</textarea>';?>
  </div/>
</div>
​
​
<!-- Text input-->

  

<div style="margin-left:460px;">
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'1"></label>  
  <div class="col-md-12">
  <?php echo '<input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">'
    ?>
  </div>
</div>
​
​
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'2"></label>  
  <div class="col-md-12">
  <?php echo '<input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">'
  ?>  
  </div>
</div>
​
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'3"></label>  
  <div class="col-md-12">
  <?php echo '<input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">'
    ?>
  </div>
</div>
​
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$i.'4"></label>  
  <div class="col-md-12">
 <?php echo '<input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">'
  ?>  
  </div>
</div>
​
​
​
​
<br />
<b>Correct answer</b>:<br />
<?php echo '<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
​
   <option value="a">Select answer for question:'.$m.'</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />'
 ?>
 </div>
​
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input name="sub" type="submit" style="margin-left:26%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>
​

</form>

<?php
if(isset($_POST["sub"]))
{$j=1;
    $qname=$_POST['qns1'];
    $oaid=mt_rand(500, 1000);
    $obid=mt_rand(500, 1000);
    $ocid=mt_rand(500, 1000);
    $odid=mt_rand(500, 1000);
$r1=mysqli_query($con,"DELETE FROM ques WHERE qid = '$qid' ") or die('Error1');
$r3=mysqli_query($con,"DELETE FROM answer WHERE qid = '$qid' ") or die('Error3');
$r2=mysqli_query($con,"DELETE FROM options WHERE qid = '$qid' ") or die('Error2');
    $a=$_POST[ $j.'1'];
    $b=$_POST[ $j.'2'];
    $c=$_POST[ $j.'3'];
    $d=$_POST[ $j.'4'];
    $qa=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$a','$oaid')") or die('Error61');
    $qb=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$b','$obid')") or die('Error62');
    $qc=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$c','$ocid')") or die('Error63');
    $qd=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$d','$odid')") or die('Error64');
    $e=$_POST['ans'.$j];
    switch($e)
    {
    case 'a':
    $ansid=$oaid;
    break;
    case 'b':
    $ansid=$obid;
    break;
    case 'c':
    $ansid=$ocid;
    break;
    case 'd':
    $ansid=$odid;
    break;
    default:
    $ansid=$oaid;
    }
    $qans=mysqli_query($con,"INSERT INTO answer VALUES  ('$qid','$ansid')");
    $ques=mysqli_query($con,"INSERT INTO ques VALUES ('$qid','$tid','$qname',4,1)") or die('Error60');
    }
	
	
	
	?>
	
	
​</fieldset>
​
</div>
</tbody>
​
​
</div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>