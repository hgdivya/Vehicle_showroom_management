<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
<title>mini project</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<style>
body{
	
	color:black;
	background-color:white;
	
	
}
table,tr,td{

	border:solid 2px black;
	
	color:black;
	
}
table{
	transform:translate(10%,10%);
}
a{
	color:black;
	text-decoration:none;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicledb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql ="SELECT * FROM  ACCOUNT_DEPARTMENT";
$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>PAYMENT TYPE</td>";

echo "<td>AMOUNT PAID</td>";
echo "<td>PURCHASE DATE</td>";
echo "<td>CUSTOMER ID</td>";
echo "<td>VEHICLE ID</td>";
echo "<td>REMAINNG AMOUNT</td>";
echo "<td>TOTAL AMOUNT</td>";
echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["Payment_type"]."</td>"."<td>".$r["Amount_paid"]."</td>"."<td>".$r["Purchase_date"]."</td>"."<td>".$r["Cust_id"]."</td>"."<td>".$r["Veh_id"]."</td>"."<td>".$r["Remaining_amt"]."</td>"."<td>".$r["Total_amt"]."</td>";
    echo "</tr>";
    echo "</tr>";
	}
	echo "<br>";
	echo "<a href=third.html>Back</a>";
	
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</body>
</html>