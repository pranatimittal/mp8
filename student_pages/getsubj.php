<?php
   include('config.php');
   session_start();
   $tn=$_GET['name'];

   $p=$_SESSION['prog'];
   $b=$_SESSION['bran'];
   $s=$_SESSION['sem'];
  // echo $p;
 
   $sql="SELECT s.subjname FROM subject AS s INNER JOIN coursedetails AS c ON s.tid=c.tid  WHERE s.tname = '$tn' AND c.program = '$p' AND c.branch = '$b' AND c.semester = '$s' ";
   $result = mysqli_query($con,$sql)or die('Error');
   $json = [];
   while($row = mysqli_fetch_array($result)){
        $json[$row['subjname']] = $row['subjname'];
   }
   echo json_encode($json);
?>