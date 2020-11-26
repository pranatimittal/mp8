c<?php  
include('config.php');
session_start();
 
 if(@$_GET['tid']) 
  {
    $tid=$_GET['tid'];
    $p=$_GET['p'];
    $b=$_GET['b'];
    $s=$_GET['s'];
    $idf= $_SESSION['idf'];

  }

$setSql = "SELECT s.rollno,s.name,h.score FROM quiz as q INNER JOIN history as h ON q.quizid = h.quizid INNER JOIN login_student as s on s.email=h.email WHERE q.teacher_id='$idf' AND h.quizid='$tid' AND s.program='$p' AND s.branch='$b' AND s.semester='$s' ORDER BY h.score DESC ";  

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
header("Content-Disposition: attachment; filename=TestScores.xlsx");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  
