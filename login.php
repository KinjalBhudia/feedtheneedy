<?php
session_start();

$service='localhost';
$username='root';
$password='';
$db='feedtheneedy';

$con=new mysqli($service,$username,$password,$db);

	$emailid=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	$_SESSION["EmailId"]=$emailid;
	$sql="select * from user_master where Email_ID='".$emailid."' AND Password='".$password."'";

	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
{
	//echo "Record succesfully selected";
	header('location:dashboard.html');
}
else
{
	echo "not selected";
}
	
 
?>