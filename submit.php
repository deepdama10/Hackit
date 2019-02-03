<?php
if(isset($_GET["sname"]))
{
	$sname=$_GET['sname'];
}
if(isset($_GET["scno"]))
{
	$scno=$_GET['scno'];
}
if(isset($_GET["sloc"]))
{
	$sloc=$_GET['sloc'];
}
if(isset($_GET["semail"]))
{
	$semail=$_GET['semail'];
}
if(isset($_GET["spass"]))
{
	$spass=$_GET['spass'];
}
$dbname="hackit";
$conn=new mysqli("localhost","root","",$dbname);
if($conn->connect_error)
{
	die("COnnection failed:".$conn->connect_error);
}
echo"Connected succesfully";
$sql="INSERT INTO student(name,cno,location,email,password) VALUES ('$sname','$scno','$sloc','$semail','$spass');";
$sqlt="UPDATE activeuser SET activeuser='$semail' where activeuser='deeepd';";
if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}
else
{
	echo "inserted";
}
if(!mysqli_query($conn,$sqlt))
{
	echo "not inserted";
}
else
{
	echo "activeuser updated";
}

header( 'Location: projectdetails.php?query='.$semail);

?>