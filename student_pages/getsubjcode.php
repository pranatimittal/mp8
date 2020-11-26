<?php
   include('config.php');
   $sn=$_GET['name'];
   $sql="SELECT subjcode FROM subject WHERE subjname = '".$sn."'";
   $result = mysqli_query($con,$sql)or die('Error');
   $json1 = [];
   while($row = mysqli_fetch_array($result)){
        $json1[$row['subjcode']] = $row['subjcode'];
   }
   echo json_encode($json1);
?>