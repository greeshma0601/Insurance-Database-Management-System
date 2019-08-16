<?php
 session_start();
 $mid=$_SESSION['id'] ;
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 $w=mysqli_query($con,"select custid from customerlogin");
 $num=mysqli_num_rows($w);
 $s=mysqli_query($con,"select *from customerlogin");
 $n=mysqli_num_rows($s);
 $v=mysqli_query($con,"select *from agent");
 $n1=mysqli_num_rows($v);
 $a=mysqli_query($con,"select sum(mamt) from policy");
 $sum1=mysqli_fetch_row($a);
 $sum=$sum1[0];
  $g=mysqli_query($con,"select aid,pid,count(custid) as nc from policy group by aid having count(custid)>1 order by count(custid) desc");
 
 ?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="viewstyle.css">
    <link rel="stylesheet" href="pic.css">
    <link rel="stylesheet" href="manager.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <script src="main.js"></script>
    <style>



</style>
</head>

<body style="background-image:url('im13.jpg')">


    <div class="navbar">
        <div id="navbar-left">
            <a href="#default" id="logo"><span style="color:blue;font-family:verdana;font-size: 200%;">I</span><span
                    style="font-family:verdana;font-size: 200%;">nsuranz</span></a>

        </div>
        <a href="viewcust.php" target="_blank">CUSTOMERS</a>
        <a href="viewagent.php" target="_blank">AGENTS</a>
        <a href="viewpolicies.php" target="_blank">POLICIES</a>


        <a class="active" href="insurance.html">HOME</a>

    </div>
    <pre>


    


        
 </pre>
<div style="padding-left:100px;">
<button class="button0 button02" style="margin:10px">ID:<?php echo $mid;?></button>
<button class="button0 button02" style="margin:20px">TOTAL NUMBER OF CUSTOMERS:  <?php echo $n?></button>
<button class="button0 button02" style="margin:20px">TOTAL NUMBER OF AGENTS:  <?php echo $n1?></button>
  <button class="button0 button02"style="margin:20px">   TOTAL AMOUNT(per month):<?php echo $sum?></button>
</div>
 <h2 style="padding-left:400px">Agents having customers more than one:</h2>
<br>
    <div class="mm">

        
  
   <table id="vt">
 <tr>
  <th>AGENTID</th><th>POLICY</th><th>NO OF CUSTOMERS</th>
  </tr>
  
  <?php
  
   for($i=1;$i<=$n;$i++){ 
    $row=mysqli_fetch_array($g);
    ?>
   <tr>
   <td><?php echo $row['aid']; ?></td>
    <td><?php echo $row['pid']; ?></td>
    <td><?php echo $row['nc']; ?></td>
 </tr>
 <?php
 }
 ?>
 </table>

        

    



















</div>









<pre>














</pre>






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
