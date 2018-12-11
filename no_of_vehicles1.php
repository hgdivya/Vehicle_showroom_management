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
$sql ="SELECT * FROM  NO_OF_VEHICLES";
$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>CUSTOMER ID</td>";
echo "<td>NUMBER OF VEHICLES</td>";
echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["Cust_id"]."</td>"."<td>".$r["No_of_vehicles"]."</td>";
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