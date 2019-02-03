<?php
if(isset($_GET["iname"]))
{
	$iname=$_GET['iname'];
}
if(isset($_GET["icno"]))
{
	$icno=$_GET['icno'];
}
if(isset($_GET["iloc"]))
{
	$iloc=$_GET['iloc'];
}
if(isset($_GET["iemail"]))
{
	$iemail=$_GET['iemail'];
}

if(isset($_GET["ipass"]))
{
	$ipass=$_GET['ipass'];
}


$dbname="hackit";
$conn=new mysqli("localhost","root","",$dbname);
if($conn->connect_error)
{
	die("COnnection failed:".$conn->connect_error);
}
echo"Connected succesfully";
$sql="INSERT INTO investor(name,email,cno,password,location) VALUES ('$iname','$iemail','$icno','$ipass','$iloc');";
$sqlt="UPDATE activeinvestor SET activeinvestor='$iemail' where activeinvestor='changed';";
mysqli_query($conn,$sqlt);
if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}
else
{
	echo "inserted";
}
header( 'Location: investor.php?');
?>