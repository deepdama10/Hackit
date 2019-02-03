<?php

//$activemail = $_GET['query'];


if(isset($_GET["ptitle"]))
{
	$ptitle=$_GET['ptitle'];
}
if(isset($_GET["pcategory"]))
{
	$pcategory=$_GET['pcategory'];
}
if(isset($_GET["pdescription"]))
{
	$pdescription=$_GET['pdescription'];
}
if(isset($_GET["pcost"]))
{
	$pcost=$_GET['pcost'];
}
//if(isset($_GET["projectImage"]))
//{
	//$pimage=addcslashes(file_get_contents($_FILES["projectImage"]["tmp_name"]));
//}
$dbname="hackit";
$conn=new mysqli("localhost","root","",$dbname);
if($conn->connect_error)
{
	die("COnnection failed:".$conn->connect_error);
} 
echo"Connected succesfully";
//$sql="INSERT INTO student(name,cno,location,email) VALUES ('$sname','$scno','$sloc','$semail');";
$sql="UPDATE student
SET title = '$ptitle', description= '$pdescription',genre='$pcategory',ecost='$pcost'
WHERE email ='$activemail' ;";

if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}
else
{
	echo "inserted";
}

//header( 'Location: projectdetails.html' );

?>