<?php
if(isset($_GET["username"]))
{
	$username=$_GET['username'];
}
if(isset($_GET["password"]))
{
	$password=$_GET['password'];
}
if(isset($_GET["option"]))
{
	$acctype=$_GET["option"];
}
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

echo "<br> username=".$username;
echo "<br> password=".$password;

$dbname="hackit";
$conn=new mysqli("localhost","root","",$dbname);
if($conn->connect_error)
{
	die("COnnection failed:".$conn->connect_error);
}
echo"Connected succesfully ";
if($acctype==Student)
{
	$sql ="SELECT email FROM student;";
	$sqlp="SELECT password FROM student";
	$sqlua="UPDATE activeuser set activeuser ='$username' where activeuser='changed';";
	$userresult=$conn->query($sql);
	$passresult=$conn->query($sqlp);
	if($userresult->num_rows>0)
	{
		while($row=$userresult->fetch_assoc() || $row1=$passresult->fetch_assoc())
		{
			echo "running loop";
			echo "<br>";
			echo "comparing";
			echo "<br>";
			echo "emailc= ".$row["email"];
			echo "<br>";
			echo "passc= ".$row1["password"];
			echo "<br>";
			if($username==$row["email"] || $password==$row1["password"] )
			{	
				//echo "<br>";
				//echo"value match";
				//echo "<br>";
				//echo "login succesfull";
				//echo "<br>";
				$conn->query($sqlua);
				header( 'Location: studentDashboard.html');
				//echo "active user updated succesfull";
				break;
			 
			}  //takes value of each element in email col
			echo "mismatch";
		}
	}else{}
}
else
{ //investor
	$sql ="SELECT email FROM investor;";
	$sqlp="SELECT password FROM investor";
	$sqlua="UPDATE activeinvestor set activeinvestor ='$username' where activeuser='changed';";
	$userresult=$conn->query($sql);
	$passresult=$conn->query($sqlp);
	if($userresult->num_rows>0)
	{
		while($row=$userresult->fetch_assoc() || $row1=$passresult->fetch_assoc())
		{
			echo "running loop";
			echo "<br>";
			echo "comparing";
			echo "<br>";
			echo "emailc= ".$row["email"];
			echo "<br>";
			echo "passc= ".$row1["password"];
			echo "<br>";
			if($username==$row["email"] || $password==$row1["password"] )
			{	
				//echo "<br>";
				//echo"value match";
				//echo "<br>";
				//echo "login succesfull";
				//echo "<br>";
				$conn->query($sqlua);
				header( 'Location: investor.php?query=');
				//echo "active investor updated succesfull";
				break;
			 
			}  //takes value of each element in email col
			echo "mismatch";
		}
	}
	else
	{
		echo "0 result";
	}
}

if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}
else
{
	echo "inserted";
}




?>