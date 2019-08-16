<?php
 var_dump($_REQUEST);
 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST"){ 
 $pwd=$_POST['password'];
 $mail=$_POST['email'];
 $value=$_POST['value'];

 if($mail==NULL or $pwd==NULL){
  header('location:http://localhost/dbms/register.html');}
 else{
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 if($value=="Customer")
  {
  $r=mysqli_query($con,"insert into customerlogin (mailid,pwd) values ('$mail','$pwd')");
  }
  else
  {
   $r=mysqli_query($con,"insert into bmlogin (mailid,pwd) values ('$mail','$pwd')");
  }
  if($r)
  header('location:http://localhost/dbms/login.html');
  else
  header('location:http://localhost/dbms/register.html');
  }
 }
?>
