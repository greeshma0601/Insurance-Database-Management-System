<?php
 session_start();
 $agentid=$_SESSION['id'] ;
?>

<html>

<head>
<link rel="stylesheet" href="viewstyle.css"/>
<link rel="stylesheet" href="styles.css"/>
</head>
<body style="background-image:url('im11.jpg')">
<pre>



</pre>


<h1 align="center"><?php echo "\r\nWELCOME";?></h1>
<pre>



</pre>
   <div style="padding-left:150px;padding-right:150px;"> <h2 style="padding-left:435px;"><?php echo "\r\nAGENT ID:".$_SESSION['id']; ?></h2>
<pre>


</pre>
   <?php
   $con=mysqli_connect("localhost","aasta","1234","insurance");
    $r=mysqli_query($con,"select *from agent where aid=$agentid");
    
    $row=mysqli_fetch_array($r);?>

    <table >
  <tr>
  <th>Name</th><th>Address</th><th>Age</th><th>Gender</th><th>Phone</th><th>Mail ID</th>
  </tr>
   <tr>
   <td><?php echo $row['fname']."".$row['lname']; ?></td>
    <td><?php echo $row['street']." ".$row['city']."".$row['pincode']; ?></td>
    <td><?php echo $row['age']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['mail']; ?></td>
 </tr>
  </table>
</div>
</body>
</html>
