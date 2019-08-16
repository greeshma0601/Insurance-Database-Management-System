<?php
 session_start();
 $agentid=$_SESSION['id'] ;
?>

<html>

<head>
<link rel="stylesheet" href="viewstyle.css"/>
<link rel="stylesheet" href="styles.css"/>
</head>
<body style="background-image:url('im5.jpg')">
<pre>


</pre>
<h1 align="center"><?php echo "\r\nWELCOME";?></h1>
  <pre>


</pre>
  <h2 align="center"><?php echo "\r\nAGENT ID:".$_SESSION['id']; ?></h2>
<pre>


</pre>
   <?php
   
   $con=mysqli_connect("localhost","aasta","1234","insurance");
    $a=mysqli_query($con,"select custid from policy where aid=$agentid");
    
     $n=mysqli_num_rows($a);
   // if($n>0)
    
  
   if($n>0) {?>
    <h3 align="center"> <?php echo "CUSTOMERS";?></h3> 
<pre>


</pre>
    
     <div style="padding-left:150px;padding-right:150px;">
    <table >
  <tr>
  <th>Custid</th><th>Name</th><th>Adress</th><th>Age</th><th>Gender</th><th>Phone</th>
  </tr>
   <tr><?php for($i=1;$i<=$n;$i++){ $row1=mysqli_fetch_array($a); 
    $custid=$row1['custid']; $r=mysqli_query($con,"select *from policy_holder where custid=$custid");
    $row=mysqli_fetch_array($r);
    ?>
 
    <td><?php echo $row['custid']; ?></td>
   <td><?php echo $row['fname']."".$row['lname']; ?></td>
    <td><?php echo $row['street']." ".$row['city']."".$row['pincode']; ?></td>
    <td><?php echo $row['age']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['phone']; ?></td>
   
 </tr><?php  }?>
  </table>
  <?php  }?> 
</div>  
</body>
</html>
