<html>
<body bgcolor="lightgreen">
<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo 'not connected';
}
if(!mysqli_select_db($con,'farmer'))
{
  echo 'not selected';
}
$fname=$_POST['fname'];
$fid=$_POST['fid'];
$pname=$_POST['pname'];
$psize=$_POST['psize'];
$sql="INSERT INTO former_details(Former_name,Product_name,Product_size,Formerid) values('$fname','$pname','$psize','$fid')";
if(!mysqli_query($con,$sql))
{
  echo 'not inserted';
}
else {
  echo 'THANK YOU ANNADATA WE WILL GET BACK TO YOU SOON';
}
header("refresh:2;url=APMC.php");

?>
</body>
  </html>
