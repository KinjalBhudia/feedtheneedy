<?php

session_start();
//echo $_SESSION["EmailId"];

if(isset($_REQUEST["submit"])){
	$typeOfFood=$_REQUEST["typeOfFood"];
	$NumOFpeople=$_REQUEST["NumOFpeople"];
	$donationDate=$_REQUEST["donationDate"];
	$expiration=$_REQUEST["expiration"];
	$pickupTime=$_REQUEST["pickupTime"];
	$pickupLocation=$_REQUEST["pickupLocation"];	
	$donationLocation=$_REQUEST["donationLocation"];
	$emailid=$_SESSION["EmailId"];
	
	$cn=new mysqli('localhost','root','','feedtheneedy');
	if($cn->connect_error){
	die("Connection failed:".$cn->connect_error);
	}
	$U_ID="select U_ID from user_master where Email_ID='$emailid'";
	$result=mysqli_query($cn,$U_ID);
	$value=mysqli_fetch_object($result);
	$sql="INSERT INTO donation_info(U_ID,TypeOfFood,NoOfPeople,Donation_Date,Expiration_Time,PickUpTime,PickUpLocation,DonationLocation) values ('$value->U_ID','$typeOfFood','$NumOFpeople','$donationDate','$expiration','$pickupTime','$pickupLocation','$donationLocation')";
	if($cn->query($sql)=== true)
	{
		 echo "<script>alert('your post has been added successfully '); window.location='dashboard.html';</script>";
	}
	else
	{
		echo "not inserted";
	}
	
}
?>