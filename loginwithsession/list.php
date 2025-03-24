<?php
session_start();
$con=mysqli_connect("localhost","root","","register")or("not connected");
$sql="SELECT * FROM login LIMIT 2";
$r=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<title></title>
</head>
<body>
<h1>Welcome : <?php echo $_SESSION['q']; ?>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <a href="logout.php" class="btn btn-danger">logout</a> </h1> 
	<br><br>
<table border="1" class="table table-success">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>mobileno</th>
<th>image</th>
<th>button</th>
</tr>
<?php
while($u=mysqli_fetch_array($r))
{
	//print_r($u);

?>
<tr>
<td><?php echo $u["id"];?></td>
<td><?php echo $u["name"];?></td>
<td><?php echo $u["email"];?></td>
<td><?php echo $u["mobileno"];?></td>
<td><img src="upload/<?php echo $u["image"];?>" height="100" width="100"></td>
<td><a href="edit.php?id=<?php echo $u["id"];?>" class="btn btn-danger">edit</a>
	<a href="delete.php?id=<?php echo $u["id"];?>" class="btn btn-danger">delete</a></td>
</tr>	
<?php } ?>
</body>
</html>