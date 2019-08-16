<?php
 session_start();
 $custid=$_SESSION['id'] ;
//var_dump($_REQUEST);
 if($_SERVER['REQUEST_METHOD']=="POST"){ 
 $reason=$_POST['reason'];
 $plid=$_POST['plid'];
//  echo $plid;
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 $p="select" .$reason. "from claiming_amt_detl where pid='$plid'";
 $q=mysqli_query($con,$p);
 
 //$row=mysqli_fetch_array($q);
 echo "Request has been recorded Pls submit related documents to the main branch office for further actions";
 //echo $row[$reason];
 }
?>
<html>
<a href="customerpg.php">Back</a>
</html>
