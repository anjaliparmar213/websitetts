<?php
$con=mysqli_connect("localhost","root","","mayuri")or("not connected");
$id=$_GET['id'];
$sql="select * from login WHERE id='$id'";
$r=mysqli_query($con,$sql);
while($u=mysqli_fetch_array($r))
{
	$id= $u['id'];
$n=$u["name"];
$e=$u["email"];
$m=$u["mobileno"];

   $i= $u["image"];
}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="update.php?x=<?php echo $id;?>" enctype="multipart/form-data">
Name:<input type="text"name="name"value ="<?php echo $n;?>"><br>
Email:<input type="text"name="email"value ="<?php echo $e;?>"><br>
mobileno:<input type="text"name="mobileno"value ="<?php echo $m;?>"><br>
image:<input type="file" name="image"><img src="upload/<?php echo $i;?>" height="100" width="80">
<input type="submit"name="abc"value="save">
</form>


</body>
</html>