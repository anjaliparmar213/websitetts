<?php

$con=mysqli_connect("localhost","root","","mayuri")or("not connected");
$msg='';
if(isset($_POST["abc"]))
{
$n=$_POST["name"];
$e=$_POST["email"];
$m=$_POST["mobileno"];
$i=$_FILES["image"]["name"];
$u="upload/".$i;

if(empty($n) || empty($e) || empty($m))
{

	$msg ="field is empty";
	//echo $msg="field is empty";
}
else
{
$sql="INSERT INTO login(name,email,mobileno,image)VALUES('$n','$e','$m','$i')";

   $x=move_uploaded_file($_FILES["image"]["tmp_name"], $u);
   if($x)
   {
     echo "file upload succssfuly";
   }
$r=mysqli_query($con,$sql);
if($r)
{
	echo "data is inserted";
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
Name:<input type="text"name="name" value =""><span style="color:red;"><?php echo $msg;?></span><br>
Email:<input type="text"name="email"value =""><span class="error" style="color:red;"><?php echo $msg;?></span><br>
mobileno:<input type="text"name="mobileno"value =""><span class="error" style="color:red;"><?php echo $msg;?></span><br>
image:<input type="file" name="image">
<input type="submit"name="abc"value="save">
</form>


</body>
</html>
	


