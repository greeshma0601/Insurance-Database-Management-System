<?php
 session_start();
 $custid=$_SESSION['id'] ;
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="viewstyle.css"/>
    <script src="main.js"></script>
    <style>
.button {
    background-color: #4682B4;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.r1 a{
font-size:15px;
color:blue;
}

</style>
</head>

<body>

    <div class="navbar">
        <div id="navbar-left">
            <a href="#default" id="logo"><span style="color:blue;font-family:verdana;font-size: 200%;">I</span><span
                            style="font-family:verdana;font-size: 200%;">nsuranz</span></a>
        </div>
        <a href="services.html" target="_blank">POLICY DETAILS</a>
        <a  href="mainform.php" >POLICY ENROLLMENT FORM</a>
        
<a  href="update.html" >CHANGE NOMINEE</a>
        
        

        <a class="active" href="insurance.html">HOME</a>

    </div>
   
     <pre>
 
  


<h1 align="center"><?php echo "\r\nWELCOME";?></h1>
<div align="center">
    <h2 ><?php echo "\r\nCUSTOMER ID:".$_SESSION['id']; ?></h2></div>
   <?php
   $con=mysqli_connect("localhost","aasta","1234","insurance");
    $r=mysqli_query($con,"select *from policy where custid=$custid");
    $n=mysqli_num_rows($r);
    

    if($n>0){
    $row=mysqli_fetch_array($r);
    $pid=$row['pid'];
        $aid=$row['aid'];
    
    $a=mysqli_query($con,"select pname from policies_offered where pid='$pid'");
    $row1=mysqli_fetch_array($a);

    $b=mysqli_query($con,"select fname,lname from agent where aid=$aid");
    $row2=mysqli_fetch_array($b);
    $name=$row2['fname'];}
    
    $res=mysqli_query($con,"select pid from policy where custid=$custid");
     //$row2=mysqli_fetch_array($b);
      
     ?>
<?php if($n>0) {?> 
    <h3 align="center"><?php echo "CURRENT POLICIES";?></h3>
<div style="padding-left:350px;padding-right:350px;">
   <table >
 <tr>
  <th>Policyid</th><th>Policy</th><th>Start-Date</th><th>End-Date</th><th>amount</th><th>AgentID</th><th>Agent</th>
  </tr>
   <?php for($i=1;$i<=$n;$i++){ $r=mysqli_query($con,"select *from policy where custid=$custid");
   $row=mysqli_fetch_array($r); 
      $pid=$row['pid'];
        $aid=$row['aid']; $a=mysqli_query($con,"select pname from policies_offered where pid='$pid'");
   $row1=mysqli_fetch_array($a);
   $d=mysqli_query($con,"select fname,lname from agent where aid=$aid");
   $row2=mysqli_fetch_array($d);
      ?>
   <tr>
   <td><?php echo $row['pid']; ?></td>
    <td><?php echo $row1['pname']; ?></td>
    <td><?php echo $row['stdate']; ?></td>
<td><?php echo $row['enddate']; ?></td>
<td><?php echo $row['mamt']; ?></td>
<td><?php echo $row['aid']; ?></td>
  <td><?php echo $row2['fname']." ".$row2['lname']; ?></td>
 </tr>
   <?php }?>
  </table></div>
 <form action="claim.php" method=post>
<div style="padding-left:350px;padding-right:350px;">
<table>

<tr>
 <td>Claiming Strategy:<select name=reason >
     <option>onmature</option>
     <option>ondeath</option>
     <option>onsurrender</option>
     </select></td>
  <td>Select PolicyID:<select name=plid > <?php while($row3=mysqli_fetch_array($res)):;?>
                <option><?php echo $row3['pid'];?> </option>
                <?php endwhile; ?>
                </select>
           
        </td></tr>
         <tr><td><input type="submit" value="CLAIM" class=button /></td></tr>
    </table>  
</div>
    </form>
   
   <?php }else{?>
 <div class="r1">
       <h3>  You have not Enrolled to any policy Yet <a href="mainform.php">Clickhere to Enroll</a></h3>
</div>      

<?php }?>
  
 

   
 
    






 




 
    </pre>
   
    <br>
    <br>
    <footer>
        <div class="footer">
            <p id="ft">Powered by <a href="#">Insuranz</a></p>
            <a href="#"><i class="fa fa-facebook-official"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-flickr"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <p class="w3-medium">
        </div>
    </footer>
</body>

</html>
