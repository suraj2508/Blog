<?php
$username=$_POST['username'];
$password=$_POST['password'];
echo "$username";
echo "$password";
$con = mysqli_connect("localhost","root","");
if($con)
{
echo "Welcome<br>";
}
if(mysqli_select_db($con,"login"))
{
	echo "database selected<br>";
}
$sql2="select * from user1";
$result=mysqli_query($con,$sql2);
while($row=mysqli_fetch_array($result))
{
	if($row[1]==$username && $row[2]==$password)
	{
		echo "true";
		session_start();
		$_SESSION['name']=$username;
		header('location:homepg.php');
		break;
	}
	else
	{
		header('location:login.html');

	}
}
$sql3="select phone from user1 where username='$username'";
$result=mysqli_query($con,$sql3);
	while ($row = $result->fetch_assoc()) 
	{
		$pn= implode($row);
	}		
	$_SESSION['phone']=$pn;

?>