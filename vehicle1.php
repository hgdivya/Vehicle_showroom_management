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
$sql ="SELECT * FROM  VEHICLE";
$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>VEHICLE_ID</td>";
echo "<td>VEHICLE_TYPE</td>";
echo "<td>VEHICLE_MODEL</td>";
echo "<td>COLOR</td>";
echo "<td>COST</td>";
echo "<td>CUSTOMER_ID</td>";
echo "<td>DEALER_ID</td>";

echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["Veh_id"]."</td>"."<td>".$r["V_type"]."</td>"."<td>".$r["V_model"]."</td>"."<td>".$r["V_color"]."</td>"."<td>".$r["V_cost"]."</td>"."<td>".$r["Cust_id"]."</td>"."<td>".$r["Dealer_id"]."</td>";
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