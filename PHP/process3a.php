<!DOCTYPE html>
<html>
<body bgcolor="lightpink">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmer";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "SELECT Formerid,Sellerid,Product_name,Product_size FROM former_details INNER JOIN seller_details ON former_details.Product_name=seller_details.Product_req";

$result1 = $conn->query($sql1);
echo "------------------------------------------------------DEAL AREA---------------------------------------------------------------------";
echo " ______________________________________________________________________________________________";
echo " ______________________________________________________________________________________________";
if ($result1->num_rows > 0) {

    while($row1 = $result1->fetch_assoc()) {
        echo "<br>(A).FORMERID:-|". $row1["Formerid"]. "|(B).SELLERID:-|". $row1["Sellerid"]. " |(C).PRODUCTNAME:-|" . $row1["Product_name"] ."|(D).PRODUCTSIZE:-|". $row1["Product_size"]."<br>";

        }
} else {
    echo "0 results";

}


$sql2 = "SELECT product_name,product_rate FROM product_details WHERE 1";


$result2 = $conn->query($sql2);

echo " ______________________________________________________________________________________________";
echo " ______________________________________________________________________________________________";

if ($result2->num_rows > 0) {

    while($row = $result2->fetch_assoc()) {
        echo "<br> (A).PRODUCTNAME:-|". $row["product_name"]. "|(B).PRODUCTRATE:-". $row["product_rate"]. "<br>";

    }
} else {
    echo "0 results";
}
echo " _______________________________________________________________________________________________";
echo " _______________________________________________________________________________________________";
$conn->close();
?>
<form action="process3b.php" method="POST">
  <h1><b>MAKE A DEAL</b></h1>
  <table border="solid" cellspacing='2' cellpadding="2" bgcolor="lightblue">
  <tr><th colspan="2">PLEASE ENTER  DETAILS</th></tr>
  <tr><td>formerid</td><td><input type="text" name="fid"></td></tr>
  <tr><td>sellerid</td><td><input type="text" name="sid"></td></tr>
  <tr><td>productname</td><td><input type="text" name="pname"></td></tr>
  <tr><td>value</td><td><input type="text" name="value"></td></tr>
  <tr><td>profit</td><td><input type="text" name="profit"></td></tr>
  <tr><td colspan="2" align="center"><input type="submit"  value="submit"></td></tr>
  </table>
  </form>
  <form action="APMC.php" method="POST">
    <center><input type="submit"  value="EXIT">
    </form>


</body>
</html>
