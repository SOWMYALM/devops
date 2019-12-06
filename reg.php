<?php
 $no=$_POST['fname'];
$en=$_POST['lname'];
$b=$_POST['email'];
$k=$_POST['password'];
$e=$_POST['phn'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'gmrit');
$q="insert into reg(fname,lname,email,password,phn) values ('$no','$en','$b','$k','$e')";
mysqli_query($con,$q);
if($q)
  echo "data inserted";
mysqli_close($con);
?>
