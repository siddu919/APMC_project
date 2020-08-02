<html>
<body bgcolor="lightyellow">
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
$sname=$_POST['sname'];
$sid=$_POST['sid'];
$preq=$_POST['preq'];
$sql="INSERT INTO seller_details(Sellerid,Seller_name,Product_req) values('$sid','$sname','$preq')";
if(!mysqli_query($con,$sql))
{
  echo 'not inserted';
}
else {
  echo 'THANK YOU BUYER WE WILL GET BACK TO YOU SOON';
}
header("refresh:2;url=APMC.php");
?>
</body>
</html>
