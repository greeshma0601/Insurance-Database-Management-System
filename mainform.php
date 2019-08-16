S<?php
 $con=mysqli_connect("localhost","aasta","1234","insurance");
 $w=mysqli_query($con,"select fname,lname,aid from agent");
 $num=mysqli_num_rows($w);
 ?>
﻿<html>
<head>
  <script src="form1.js"></script>
  <script src="amt.js"></script>  
 <h2 id="p1" align="center">Policy Enrollment Form</h2>
 <style>
 #p1{color:rgb(20,87,167);}
 .content
 {
  max-width:800px;
  margin:auto;
 }
 tr.bordered {
    border-bottom:1px solid #000;
 }
 
 
 </style>
</head>
 	<body style="background-image:url('https://images.pexels.com/photos/235985/pexels-photo-235985.jpeg?auto=compress&cs=tinysrgb&h=650&w=940')">

<div class="content">
 <form action="form1.php" method="post" onsubmit="return validation()">
 <table align="justify">
 <tr class="bordered"><td><h3 >Personal Details</h3></td></tr>
 <tr style="border-bottom:solid;"><td>Name:</td></tr>
 <tr>
 <td>First Name:</td><td><input type="text" placeholder="Fname" name="fname" /></td>
 <td align=right height=15px >Last Name:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" placeholder="Lname" name="lname"/></td>
 </tr>
 <tr style="border-bottom: 1px solid #000;">
 <td>gender:</td><td><input type="radio" name="gender" value="male"/>male
     <input type="radio" name="gender" value="female" checked />female</td>
 <td>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp Age:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" placeholder="age" pattern="[0-9]{2}" name="age"/></td>
 </tr>
 
 <tr>
 <td>Residential Address:<td>
 </tr>
 <tr>
 <td>Street/lane:</td><td><input type="text" placeholder="street/lane" name="street"/></td>
 <td>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp City/Town:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" placeholder="city" name="city"/></td>
 </tr>
 <tr>
 <td>Pincode:</td><td><input type="text" pattern="[0-9]{5}" placeholder="five digit pincode" name="pincode"/></td>
 <td>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp phone:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" pattern="[0-9]{10}" placeholder="phone" name="phone"/></td>
 </tr>
 <tr><td>Select AgentID: 
           
        </td> <td><select name=agent onchange="fetchagent(this.value)"> <?php while($row=mysqli_fetch_array($w)):;?>
                <option><?php echo $row['aid'];?> </option>
                <?php endwhile; ?>
                </select></td>
     <p id=1></p>
 <tr>
 <td>Select Policy:
     </td><td><select name=policy onchange="fetchamt(this.value)">
     <option>Jeevan Anand</option>
     <option>Jeevan Umang</option>
     <option>Jeevan Anmol</option>
     <option>Jeevan Akshay</option>
     <option>Jeevan Amulya</option>
     <option>Jeevan Pragathi</option>
     <option>Jeevan Tarun</option>
     <option>Jeevan Shanti</option>
     </select></td>
  </tr>
 
 <tr><td><h3>Provide Nominee Details</h3></td></tr>
 </tr>
 <tr><td>Name:</td></tr>
 <tr>
 <td>First Name:</td><td><input type="text" placeholder="Fname" name="cfname" /></td>
 <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Last Name:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" placeholder="Lname" name="clname"/></td>
 </tr>
 <tr>
 <td>gender:</td><td><input type="radio" name="cgender" value="male" />male
            <input type="radio" name="cgender" value="female" checked/>female</td>
 <td>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp Age:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" placeholder="age" pattern="[0-9]{2}" name="cage"/></td>
 </tr>
 <tr>
 <td>Residential Address:<td>
 </tr>
 <tr>
 <td>Street/lane:</td><td><input type="text" placeholder="street/lane" name="cstreet"/></td>
 <td>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp City/Town:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" placeholder="city" name="ccity"/></td>
 </tr>
 <tr>
 <td>Pincode:</td><td><input type="text" pattern="[0-9]{6}" placeholder="five digit pincode" name="cpincode"/></td>
 <td>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp phone:</td><td>&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="text" pattern="[0-9]{10}" placeholder="phone" name="cphone"/></td>
 </tr>
 <tr><td>Relationship Type:</td><td><input type="text" placeholder="relation" name="crelation"/></td></tr>
 <tr><td>Payment:</td></tr>
   <tr><td>Cheque No:</td><td><input type="text" placeholder="cheque no" name="chequeno"/></td></tr>
 </table>
<tr></tr><tr></tr><tr></tr><tr></tr>
 <input type="checkbox" required />I agree with the terms and conditions of the company
 </br>
<tr></tr><tr></tr><tr></tr><tr></tr>
&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="submit"value="SUBMIT"/>
 </form>
</dev>
</body>
</html>
