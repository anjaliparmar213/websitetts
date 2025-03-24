<?php
$con=mysqli_connect("localhost","root","","mayuri")or("not connected");
$id=$_GET['id'];
$sql="delete from login WHERE id='$id'";
$r=mysqli_query($con,$sql);
if($r)
{
   header("location:list.php");	
}
?>