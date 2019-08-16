<?php
 var_dump($_REQUEST);
 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST"){ 
 $pwd=$_POST['password'];
 $mail=$_POST['email'];
 $value=$_POST['value'];
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 if($value=="Customer")
 {
  $cl=mysqli_query($con,"select custid,mailid,pwd from customerlogin where mailid='$mail' && pwd='$pwd'");
  $num=mysqli_num_rows($cl);
  $row=mysqli_fetch_array($cl);
  $id=$row['custid'];
   if($num==1)
   { 
  $_SESSION['id']=$id;
    header('location:http://localhost/dbms/customerpg.php');
   }
  else
  { 
   echo "\r\nEnter valid mailid and password";
   header('location:http://localhost/dbms/login.html');
  }
}
 else if($value=="Branch Manager")
  {
  $bml=mysqli_query($con,"select mid,mailid,pwd from bmlogin where mailid='$mail' && pwd='$pwd' ");
  $num=mysqli_num_rows($bml);
  $row=mysqli_fetch_array($bml);
  $id=$row['mid'];
  //header('location:http://localhost/dbms/customerpage.html');
  if($num==1)
    { 
  $_SESSION['id']=$id;
    header('location:http://localhost/dbms/manager.php');
   }
  else
  { 
   echo "\r\nEnter valid mailid and password";
   header('location:http://localhost/dbms/login.php');
  }
}

 else 
  {
  $al=mysqli_query($con,"select aid,mail,pwd from agent where mail='$mail' && pwd='$pwd' ");
  $num=mysqli_num_rows($al);
  $row=mysqli_fetch_array($al);
  $id=$row['aid'];
  //header('location:http://localhost/dbms/customerpage.html');
  if($num==1)
  { 
  $_SESSION['id']=$id;
    header('location:http://localhost/dbms/agentpg.php');
  }
  else
  { 
   echo "\r\nEnter valid mailid and password";
   header('location:http://localhost/dbms/login.html');
  }
  }
  echo $id;
 
 }
?>
