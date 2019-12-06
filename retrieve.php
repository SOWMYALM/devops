<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'gmrit');
$q="select No, name, branch from staff";
$r=mysqli_query($con,$q);
if($r->num_rows>0)
  while($row=$r->fetch_assoc())
  {
     echo "eno: " . $row["No"]. " Name: " . $row["name"]. " branch: ". $row["branch"]. "<br>" ;
}
mysqli_close($con);
?>
