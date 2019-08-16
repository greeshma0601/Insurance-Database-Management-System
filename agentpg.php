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
    <title>AGENT</title>
    <script src="main.js"></script>
    <style>.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}</style>
</head>

<body>

    <div class="navbar">
        <div id="navbar-left">
            <a href="#default" id="logo"><span style="color:blue;font-family:verdana;font-size: 200%;">I</span><span
                            style="font-family:verdana;font-size: 200%;">nsuranz</span></a>
        </div>
        <a href="agcust.php" target="_blank">MY CUSTOMERS</a>
        <a href="viewag.php" target="_blank">VIEW DETAILS</a>




        <a class="active" href="insurance.html">HOME</a>

    </div>
    <pre>





    <h1 align="center"><?php echo "\r\nWELCOME";?></h1>
         <h2 style="padding-left:530px;"><?php echo "\r\n     AGENT ID:".$_SESSION['id']; ?></h2>
   
        <img src="https://www.intelligentinsurer.com/media/image/istock-892701462_ponywang.jpg" class="center" style="width:300px;height:300px;"> 





































 
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
