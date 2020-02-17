<?php
//include_once('connection.php');
//Session_start()

//$emailid=$_SESSION["EmailId"];
$con=mysqli_connect('localhost','root','','feedtheneedy');
$sql="select First_Name,Last_Name,Mobile_No ,Organisation, TypeOfFood,NoOfPeople,Donation_Date,Expiration_Time,PickUpTime,PickUpLocation,DonationLocation,FoodDetail  from user_master inner join donation_info on user_master.U_ID=donation_info.U_ID";
$result=mysqli_query($con,$sql);
?>

<html>
<head>
<link href="pmms.css" rel="stylesheet">
</head>
<body>

<nav>
 <div id="navbar">
<a href="home.html">Log Out</a>
</div>
 
 <div class="dropdown">
    <button class="dropbtn">Profile
    </button>
    <div class="dropdown-content">
      <a href="profile.html">Edit Profile</a>
      <a href="#">Notification</a>
    </div>
  </div>

	<div class="dropdown">
		<button class="dropbtn">Volunteer
		</button>
		<div class="dropdown-content">
		  <a href="volunteer.php">Add Event</a>
		  <a href="history.html">My Event</a>
		</div>
	</div>

	<div class="dropdown">
		<button class="dropbtn">Donate
		</button>
		<div class="dropdown-content">
		  <a href="addDonation.php">Add Donation</a>
		  <a href="history.html">My Donation</a>
		</div>
	</div>
  
  <div id="b"><a href="#"><img src="logo.png" style="width:60px"></a></div>
  <div id="name">Feed The Needy</div>
  <div id="navbar">
  <a href="dashboard.html">Home</a>
  </div>
</nav>

<div id="content">
<div id="report">
<p style="font-size:20px;text-decoration:underline;padding-left:270px;">Donation Events</p><br/><br/>
	<table  style="width:750px" align="center" border="0px">
	
		<?php
			while($rows=mysqli_fetch_assoc($result))
			{
		?>
			<tr>
				<td><?php echo $rows['First_Name'];?>&nbsp;&nbsp;<?php echo $rows['Last_Name'];?></td>
				<td>(<?php echo $rows['Organisation'];?>)</td>
				<td>Contact No:<?php echo $rows['Mobile_No'];?></td>
			</tr>
				<tr>
				<td>Donation Date:<?php echo $rows['Donation_Date'];?></td>
				<td>Donation Location:<?php echo $rows['DonationLocation'];?></td>
				<td >Food Expiration Time:<?php echo $rows['Expiration_Time'];?></td>
				
			</tr>
			<tr>
				<td>No of People can be served :<?php echo $rows['NoOfPeople'];?></td>
				<td colspan='2'>Food Type:<?php echo $rows['TypeOfFood'];?></td>
			</tr>
				<tr>
				<td>Pickup Location:<?php echo $rows['PickUpLocation'];?></td>
				<td colspan='2'>Pickup Time:<?php echo $rows['PickUpTime'];?></td>
			</tr>
			<tr>
				<td colspan='3'>Food Detail:<?php echo $rows['FoodDetail'];?></td>
			</tr>
			<tr>
			<td colspan='3' ><center><button id="submit">Show Interest</button></center></td>
			</tr>
		<?php
			}
		?>
	</table>
	</div>
</div>

<div id="f">
		<div id="finfo">
		<div id="ffirst">
		<a href="#" style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">Contact Us</a>
		</div>
		<div id="fsecond">
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">Terms & Conditions</a>
		</div>

		<div id="fthird"  >
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">FAQs</a>
		</div>
		<div id="ffourth">
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">How it Works</a>
		</div>
		<div id="ffifth">
		<a href="#"style="text-decoration:none;color:white;font-family:Comic Sans MS, cursive, sans-serif;">Find Us:&nbsp;&nbsp;&nbsp;</a>
		<a href="#"> <img src="facebook.png" style="width:25px;height:25px;"></a>
		<a href="#"> <img src="instagram.png" style="width:30px;height:25px;"></a>
		<a href="#"> <img src="twitter.png" style="width:30px;height:25px;"></a>
		</div>
		<div id="fselect">
		<form>
		  <select name="language" style="width:225px;height:35px;font-size:15px;font-family:Comic Sans MS, cursive, sans-serif;">
			<option >English</option>
			<option >Hindi</option>
			<option >Gujarati</option>
		 
		  </select>
		</form>
		</div>
		</div>
		
		<div id="line">
		<hr>
		<p align="center" style="font-size:13px;">&#169; Copyright All Rights Reserved</p>
		</div>
	</div>	
</body>
</html>