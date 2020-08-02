<html>
<body bgcolor="lightgreen">
<?php
$uname=$_POST['uname'];
$password=$_POST['pass'];
if ($uname=="ADMINAPMC" && $password=="98805") {
echo "PLEASE WAIT WHILE WE LOGIN....";
header("refresh:10;url=process3a.php");
}
else{
    echo "PLEASE ENTER CORRECT PASSWORD/USERNAME";
   header("refresh:5;url=adminlogin.php");
}
?>
</body>
</html>
