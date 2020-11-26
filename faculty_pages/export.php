<?php  
include('config.php');
 
 if(@$_GET['tid']) 
  {
    $tid=$_GET['tid'];
  }

$setSql = "SELECT s.rollno , s.name , h.score FROM history AS h INNER JOIN login_student AS s ON h.email=s.email WHERE h.quizid='$tid' ORDER BY h.score DESC";  
$setRec = mysqli_query($con, $setSql);  
  
$columnHeader = '';  
$columnHeader = "rollno" . "\t" . "name" . "\t" . "score" . "\t ";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=TestScores.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  
