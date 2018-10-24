<?php
$username=$_POST['username'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password= $_POST['password'];

 $con = mysqli_connect("localhost","root","");
if($con)
{
echo "Welcome<br>";
}
if(mysqli_select_db($con,"login"))
{
	echo "database selected<br>";
}
echo "hi<br>";
echo $mobile_no;
$sql = "insert into user1 values('$phone','$username','$password','$address')";
if(mysqli_query($con,$sql))
{
	echo"data inserted";
}
	header('location:login.html'); 
?>