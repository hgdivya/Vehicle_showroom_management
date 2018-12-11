<!DOCTYPE html>
<html>
<head>
<title>mini project</title>
<style>
body{
	background-image:url("https://i.pinimg.com/originals/bf/2c/b7/bf2cb735f549ab20351c3190bcaae2e8.jpg");
	color:white;
	
	
}
table,tr,td{

	border:solid 2px white;
	
	color:white;
	
}
table{
	transform:translate(10%,10%);
}
a{
	color:white;
	border:solid,5px,white;
	padding:2px;
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
$sql ="call account4($_POST[value1])";
$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>PAYMENT TYPE</td>";
echo "<td>AMOUNT PAID</td>";
echo "<td>PURCHASE DATE</td>";
echo "<td>CUSTOMER ID</td>";
echo "<td>VEHICLE ID</td>";

echo "<td>TOTAL AMOUNT</td>";
echo "<td>REMAINNG AMOUNT</td>";

echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["Payment_type"]."</td>"."<td>".$r["Amount_paid"]."</td>"."<td>".$r["Purchase_date"]."</td>"."<td>".$r["Cust_id"]."</td>"."<td>".$r["Veh_id"]."</td>"."<td>".$r["Total_amt"]."</td>"."<td>".$r["Remaining_amt"]."</td>";
    echo "</tr>";
    echo "</tr>";
	}
	echo "<br>";
	echo "<a href=storedp_account.html>Back</a>";
	
	
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</body>
</html>