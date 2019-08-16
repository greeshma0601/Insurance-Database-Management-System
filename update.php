<?php session_start();
  $custid=$_SESSION['id'] ;
 //var_dump($_REQUEST);
 if($_SERVER['REQUEST_METHOD']=="POST"){ 
 
 
 $cfname=$_POST['cfname'];
 $clname=$_POST['clname'];
 $cgender=$_POST['cgender'];
 $cage=$_POST['cage'];
 $cstreet=$_POST['cstreet']; 
 $ccity=$_POST['ccity'];
 $cpincode=$_POST['cpincode'];
 $cphone=$_POST['cphone'];
 $relation=$_POST['crelation'];
  $pid=$_POST['pid'];


 $con=mysqli_connect("localhost","aasta","1234","insurance");
 if($pid==NULL or
 $cfname==NULL or
 $clname==NULL or
 $cgender==NULL or
 $cage==NULL or
 $cstreet==NULL or
 $ccity==NULL or
 $cpincode==NULL or
 $cphone==NULL or
 $relation==NULl){
  echo " PLEASE ENTER THE DETAILS TO PROCEED" ;
  
 }else{
 $q="update claimant set fname='$cfname',lname='$clname',city='$ccity',street='$cstreet',pincode=$cpincode,gender='$cgender',age=$cage,phone='$cphone',relation='$relation' where custid=$custid and pid='$pid'";
  
 $n=mysqli_query($con,$q);
  
  if($n)
  echo "updated successfully";
  else echo "error";}
  
}
?>
   



 
