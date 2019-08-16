<?php
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 $q="select *from agent";
 $r=mysqli_query($con,$q);
 $n=mysqli_num_rows($r);
 mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
 <title>View Details</title>
 <link rel="stylesheet" href="./viewstyle.css"/>
 <link rel="stylesheet" href="styles.css"/>
</head>
<body  style="background-image:url('im10.jpg ')">
<pre>




</pre>
 <div style="padding-left:150px;padding-right:150px;"><h1 class=he1>AGENTS DETAILS</h1>
<br>
<br>
 <table >
 <tr>
  <th>Agent ID</th><th>Firstname</th><th>Lastname</th><th>City</th><th>Street</th><th>Pincode</th><th>Gender</th><th>Age</th><th>Mailid</th><th>Phone</th>
  </tr>
  
  <?php
  
   for($i=1;$i<=$n;$i++){
    $row=mysqli_fetch_array($r);
    ?>
   <tr>
   <td><?php echo $row['aid']; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['lname']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['street']; ?></td>
<td><?php echo $row['pincode']; ?></td>
  <td><?php echo $row['gender']; ?></td>
   <td><?php echo $row['age']; ?></td>
<td><?php echo $row['mail']; ?></td>
<td><?php echo $row['phone']; ?></td>
 </tr>
 <?php
 }
 ?>
 </table>
</div>
</body>
</html>
