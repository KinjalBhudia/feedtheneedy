<?php
if(isset($_REQUEST["submit"]))
{
$emailid=$_REQUEST["emailid"];
$pass=$_REQUEST["password"];


$cn=new mysqli('localhost','root','','feedtheneedy');
if($cn->connect_error){
	die("Connection failed:".$cn->connect_error);
}
$sql="INSERT INTO user_master(Email_ID,Password) values ('$emailid','$pass')";

if($cn->query($sql)=== true)
{
	header('location:dashboard.html');
}
else
{
	echo "not inserted";
}
}

?>