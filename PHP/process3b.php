<html>
<body bgcolor="yellow">
<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn)
{
  echo 'not connected';
}
if(!mysqli_select_db($conn,'farmer'))
{
  echo 'not selected';
}
$fid=$_POST['fid'];
$sid=$_POST['sid'];
$pname=$_POST['pname'];
$value=$_POST['value'];
$profit=$_POST['profit'];
$sql="INSERT INTO apmc_details(fid,sid,productname,value,profit) values('$fid','$sid','$pname','$value','$profit')";
$conn->query($sql);
$sql1="DELETE FROM apmc_details WHERE sid=$sid";

if ($conn->query($sql1) === TRUE) {

} else {
    echo "Error deleting record: " . $conn->error;
}

$sql2="DELETE FROM former_details WHERE Formerid=$fid";
if ($conn->query($sql2) === TRUE) {

} else {
    echo "Error deleting record: " . $conn->error;
}

$sql3="DELETE FROM seller_details WHERE Sellerid=$sid";
if ($conn->query($sql3) === TRUE) {

} else {
    echo "Error deleting record: " . $conn->error;
}

if(!mysqli_query($conn,$sql))
{
  echo 'not inserted';
}
else {
  echo "THE DEALING IS SUCCESSFUL";
}
$conn->close();
header("refresh:5;url=process3a.php");
?>
</body>
</html>
