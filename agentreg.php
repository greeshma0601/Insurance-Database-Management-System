<?php
 //var_dump($_REQUEST);
 if($_SERVER['REQUEST_METHOD']=="POST"){ 
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $gender=$_POST['gender'];
  $age=$_POST['age'];
 $street=$_POST['street']; 
 $city=$_POST['city'];
 $pincode=$_POST['pincode'];
 $phone=$_POST['phone'];
 $mail=$_POST['mail'];
 $pwd=$_POST['pwd'];
 
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 $p="insert into agent(fname,lname,city,street,pincode,gender,age,mail,pwd,phone) values ('$fname','$lname','$city','$street',$pincode,'$gender',$age,'$mail','$pwd',$phone)";
 $m=mysqli_query($con,$p);
 if($m)
 echo "\r\nSucessfully Registered";
 mysqli_close($con);
 }
?>
 <!DOCTYPE html>
 <html>
 <head></head>
 <body>
 <br>
 <a href="insurance.html">back</a>
 </body>
 </html>

  
