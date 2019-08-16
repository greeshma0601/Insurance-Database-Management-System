<?php 
  session_start();
  $custid=$_SESSION['id'] ;
 //var_dump($_REQUEST);
 if($_SERVER['REQUEST_METHOD']=="POST"){ 
 $phfname=$_POST['fname'];
 $phlname=$_POST['lname'];
 $phgender=$_POST['gender'];
  $phage=$_POST['age'];
 $phstreet=$_POST['street']; 
 $phcity=$_POST['city'];
 $phpincode=$_POST['pincode'];
 $phphone=$_POST['phone'];
 $policy=$_POST['policy'];
 $aid=$_POST['agent'];
 
 $cfname=$_POST['cfname'];
 $clname=$_POST['clname'];
 $cgender=$_POST['cgender'];
 $cage=$_POST['age'];
 $cstreet=$_POST['cstreet']; 
 $ccity=$_POST['ccity'];
 $cpincode=$_POST['cpincode'];
 $cphone=$_POST['cphone'];
 $relation=$_POST['crelation'];
 $chequeno=$_POST['chequeno'];

if($phfname==NULL or $phlname==NULL or $phgender==NULL or $phage==NULL or $phstreet==NULL or $phcity==NULL or
 $phpincode==NULL or $phphone==NULL or
 $policy==NULL or $aid==NULL or
 $cfname==NULL or
 $clname==NULL or
 $cgender==NULL or
 $cage==NULL or
 $cstreet==NULL  or
 $ccity==NULL or
 $cpincode==NULL or
 $cphone==NULL or
 $relation==NULL)
{ header('location:http://localhost/dbms/mainform.php');}
 else{

 $con=mysqli_connect("localhost","aasta","1234","insurance");
 $q="insert into policy_holder values ('$phfname','$phlname','$phcity','$phstreet',$phpincode,'$phgender',$phage,$phphone,$custid)";
 $n=mysqli_query($con,$q);
  $z=mysqli_query($con,"select pid,terms,mamt from policies_offered where pname='$policy'");
  
  $row=mysqli_fetch_array($z);
  $pid=$row['pid'];
  $mamt=$row['mamt'];
  $y=$row['terms'];
 $p="insert into claimant (fname,lname,city,street,pincode,age,gender,phone,relation,aid,pid,custid) values   ('$cfname','$clname','$ccity','$cstreet',$cpincode,$cage,'$cgender',$cphone,'$relation',$aid,'$pid',$custid)";
 $m=mysqli_query($con,$p);
  

  //echo $pid." ".$mamt." ".$y;
  $w="insert into policy values('$pid',CURDATE(),DATE_ADD(now(),INTERVAL $y YEAR),$mamt,$aid,$custid)";
  $r=mysqli_query($con,$w);
 
 $pay=mysqli_query($con,"insert into payment values('$pid','$chequeno',CURDATE(),$mamt)");

 if($pay and $n and $r and $m)
  header('location:http://localhost/dbms/mainform.php');
  echo "\r\nPolicy has been enrolled";
 mysqli_close($con);}}
?>
 <!DOCTYPE html>
 <html>
 <head></head>
 <body>
 <br>
 <a href="customerpg.php">back</a>
 </body>
 </html>


 


  
