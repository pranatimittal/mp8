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

<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Add Feedback</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
body {
  font-family: Arial, Helvetica, sans-serif;
}
.content {
  flex: 1 0 auto;
}  
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
body {
  background-color: #ffffff;
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
* {
  box-sizing: border-box;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}



.btn-group button {
 
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: center; /* Float the buttons side by side */
  width: 20%;
  font-size: 18px;
  border-radius: 4px;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  background: rgb(28, 184, 65);
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
  
}
.wrapper {
    text-align: center;
    
}

.Modal {
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 9999;
  width: 100%;
  height: 100%;
  padding-top: 100px;
  background-color: black;
  background-color: rgba(0, 0, 0, 0.4);
  -webkit-transition: 0.5s;
  overflow: auto;
  transition: all 0.3s linear;
}

.Modal-content {
  background-color: #fefefe;
   margin: auto; 
   padding: 20px; 
  border-radius: 4px;
  max-width: 450px;
  height: 450px;
}

.ModalOpen { overflow: hidden; }

.is-hidden { display: none; }

.is-visuallyHidden { opacity: 0; }

/* The Close Button */

.Close {
  color: #aaaaaa;
  float: right;
  font-size: 16px;
}

.Close:hover, .Close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.is-blurred {
  filter: blur(2px);
  -webkit-filter: blur(2px);
}

input[type="checkbox"]:required:invalid + label { color: red; }
  input[type="checkbox"]:required:valid + label { color: green; }

  select{
    width:969px;
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
 .btn-group button {

 width: 40%;
 font-size: 12px;
 border-radius: 4px;
 }
 select{
   width:100%;
 }
 }

</style>

</head>
<body>
<a name="top"></a>
    <div class="content">
  <main id="myContainer" class="MainContainer">
    <div class="header">
      <img src="IGDTUW-logo.png" alt="logo" />
      <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
      <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
    </div>
  
  
  <div class="navbar">
    <a href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="student_home_page.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="add_fb_for_teacher.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Feedback</a> 
    <a href="view_fb_given.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback given for faculty</a>
    
  </div>
<form method="post">
  <div style=" height:90px;"><br>
    <h2 style="text-align: center;">FACULTY FEEDBACK <i class="fa fa-sign-out  fa-commenting-o"></i></h2>
      </div>


      <div class="container">


    <?php
  
        $E=$_SESSION['Email'];
        $result = mysqli_query($con,"SELECT * FROM login_student WHERE email='$E' " ) or die('Error');

        while($row = mysqli_fetch_array($result)) {
          $n = $row['name'];
          $rn = $row['rollno'];
          $p = $row['program'];
          $b = $row['batch'];
          $br = $row['branch'];
          $s = $row['semester'];
      
      $_SESSION["nam"]=$n; 
      $_SESSION["roll"]=$rn; 
      $_SESSION["prog"]=$p; 
      $_SESSION["bat"]=$b; 
      $_SESSION["bran"]=$br; 
      $_SESSION["sem"]=$s; 
        

          echo '<div class="row">
            <div class="col-25">
              <label for="sname">Student Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="name" name="name" value ='.$n.' readonly>
            </div>
          </div>';



          echo '<div class="row">
            <div class="col-25">
              <label for="rollno">Roll Number</label>
            </div>
            <div class="col-75">
              <input type="text" id="roll" name="rollno" value ='.$rn.' readonly>
            </div>
          </div>';


          echo '<div class="row">
            <div class="col-25">
              <label for="prog">Program </label>
            </div>
            <div class="col-75">
               <input type="text" id="prog" name="program" value ='.$p.' readonly> 
            </div>
      
          </div>';


           echo '<div class="row">
            <div class="col-25">
              <label for="prog">Branch </label>
            </div>
            <div class="col-75">
               <input type="text" id="br" name="branch" value ='.$br.' readonly> 
            </div>
          </div>';


           echo '<div class="row">
            <div class="col-25">
              <label for="prog">Semester </label>
            </div>
            <div class="col-75">
               <input type="text" id="sem" name="semester" value ='.$s.' readonly> 
            </div>
          </div>';


          echo '<div class="row">
            <div class="col-25">
              <label for="prog">Session </label>
            </div>
            <div class="col-75">
               <input type="text" id="session" name="session" value ='.$b.' readonly> 
            </div>
          </div>';


        
          echo '<br><div class="row">
            <div class="col-25">
              <label for="name">Faculty Name</label>
            </div>
          
  <select name="fac_name" id="disabledSelect" class="form-control" >
  <option value="">Select Faculty</option>'
                                      
?>
<?php                   
    $sel=mysqli_query($con, "select * from login_student as s inner join coursedetails as c where 
    s.program=c.program and s.semester=c.semester and s.branch= c.branch and s.email='$E'");
                while($data=mysqli_fetch_array($sel))
                {
                  $tid1=$data["tid"];
                  //$_SESSION['tidf']=$tid1;

                  
      $sel1=mysqli_query($con, "select distinct tname from subject where tid='$tid1'");
      while($data1=mysqli_fetch_array($sel1))
                {
                  
                  ?>
                  <option value=<?php echo $data1["tname"]?>>
                  <?php echo $data1["tname"];?></option>
                <?php
                }
                }
                ?>
                                    </select>
          </div>
     
              
         
          <div class="row">
            <div class="col-25">
              <label for="name">Subject Name</label>
            </div>
            <select name="sub_name" id="disabledSelect" class="form-control">
            <option value="">Select Subject</option>
            </select>
          </div>



<script>
$( "select[name='fac_name']" ).change(function () {
    var fname = $(this).val();
    if(fname) {
        $.ajax({
            url: "getsubj.php",
            dataType: 'Json',
            data: {'name':fname},
            success: function(data) {
                $('select[name="sub_name"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="sub_name"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });
    }else{
       $('select[name="sub_name"]').empty();
    }
});


</script>

<?php
    }

  ?>

</div>

</div>
<br>

       <br>
       <div class="wrapper">
       <div class="btn-group">
        <button name="sub" id="myBtn">Click here to proceed.</button>
    </div>
  </div>
   </form>
   
<?php
if(isset($_POST["sub"]))
{
  //$qid=mt_rand(100, 200);
  //$sub_code=$_POST["sub_code"];
  $fac_name=$_POST["fac_name"];
  $sub_name=$_POST["sub_name"];
  
//$_SESSION["xx"]=$sub_code;
$_SESSION["yy"]=$fac_name;
$_SESSION["zz"]=$sub_name;

echo "<script>window.location.href='section_wise_fb.php'</script>";
//$_SESSION["y"]=$qid;
}
?>



</main>

</div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>