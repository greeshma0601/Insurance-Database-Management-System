<?php
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 $q="select *from policy";
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
<body style="background-image:url('im10.jpg ')">
<div style="padding-left:150px;padding-right:150px;">
<pre>



</pre>
 <h1 class=he1>POLICY DETAILS</h1><br><br>
 <table  >
 <tr>
  <th>Customer ID</th><th>Startdate</th><th>Enddate</th><th>Policy ID</th><th>Agent ID</th><th>Amount(monthly)</th>
  </tr>
  
  <?php
  
   for($i=1;$i<=$n;$i++){
    $row=mysqli_fetch_array($r);
    ?>
   <tr>
   <td><?php echo $row['custid']; ?></td>
    <td><?php echo $row['stdate']; ?></td>
    <td><?php echo $row['enddate']; ?></td>
<td><?php echo $row['pid']; ?></td>
<td><?php echo $row['aid']; ?></td>
<td><?php echo $row['mamt']; ?></td>
 
 </tr>
 <?php
 }
 ?>
 </table>
</div>
</body>
