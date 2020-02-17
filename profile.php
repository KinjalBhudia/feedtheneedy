<?php
session_start();
echo $_SESSION["EmailId"];

if(isset($_REQUEST["submit"])){
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$org=$_REQUEST["oname"];
$role=$_REQUEST["role"];
$emailid=$_SESSION["EmailId"];
$contact=$_REQUEST["mno"];
$address=$_REQUEST["address"];
$bod=$_REQUEST["bday"];
$sdate1=$_REQUEST["sdate1"];
$sdate2=$_REQUEST["sdate2"];


$cn=new mysqli('localhost','root','','feedtheneedy');
if($cn->connect_error){
	die("Connection failed:".$cn->connect_error);
}
$sql="Update user_master set First_Name='$fname',Last_Name='$lname',Organisation='$org',Role_Org='$role',Address='$address',Mobile_No='$contact' where Email_ID='$emailid'";
/*$user="select U_ID from user_master where Email_ID='$emailid'";
$result=mysqli_query($cn,$user);
$value=mysqli_fetch_object($result);
$sql1="insert into date_master(U_ID,BOD,Special_Date1,Special_Date2) values('$value->U_ID','$bod','$sdate1','$sdate2')";*/
if($cn->query($sql)=== true)// && ($cn->query($sql1)=== true))
{
	 echo "<script>alert('your profile has been updated successfully '); window.location='dashboard.html';</script>";
}
else
{
	echo "not inserted";
}
}


?>