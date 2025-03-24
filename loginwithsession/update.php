<?php
include("connect.php");
 $id=$_GET['x'];
 if(isset($_POST['abc']))
 {
 	  $N=$_POST['name'];
 	  $E= $_POST['email'];
 	  $M=$_POST['mobileno'];
 	  $img=$_FILES["image"]["name"];
 	 // echo $img;exit;
 	  $u="upload/".$img;
 	  $q="UPDATE login SET name='$N',email='$E',mobileno='$M',
 	  image='$img' WHERE id='$id'";
 	  //echo $q;exit;
 	  $x=move_uploaded_file($_FILES["image"]["tmp_name"], $u);
   if($x)
   {
     echo "file upload succssfuly";
   }
 	 $a= mysqli_query($con,$q);
 	 if($a)
 	 {
 	 	header("Location:list.php");
 	 }
 }


?>