<?php
session_start();
$con=mysqli_connect("localhost","root","","register")or die("not connected");

if(isset($_POST["abc"]))
{

	$u=$_POST["username"];
	$p=$_POST["password"];
//echo $p;exit;
	$sql="select * from tbl_login where 
	username='$u'  and  password='$p'";
	//echo $sql;exit;

	$s=mysqli_query($con,$sql);
// echo $r;exit;
     
	if($s)
	{
		//echo "hi".exit;
       $_SESSION['q']=$_POST['username'];
	 
 		header("Location:list.php");
	}
	else
	{
		
		echo "wrong password";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	username:<input type="text" name="username">
	Passord:<input type="text" name="password">
	<input type="submit" name="abc" value="save">

</form>

</body>
</html>