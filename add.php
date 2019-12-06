<?php	
 $f=$_POST['jno'];
$u=$_POST['sname'];
$c=$_POST['dep'];
$k=$_POST['sem'];
$con=mysql_connect("localhost","root","");
mysql_select_db($con,'gmrit');
$q="insert into add(jno,sname,dep,sem) values ('$f','$u','$c','$k')";
$res=mysql_query($q,$con);
if($res)
  echo "data inserted";
mysql_close($con);
?>
