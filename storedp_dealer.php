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
	text-decoration:none;
	color:white;
	border:solid,5px,white;
	padding:2px;
	

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
$sql ="call dealer1($_POST[value])";
$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>DEALER ID</td>";
echo "<td>DEALER NAME</td>";
echo "<td>DEALER PHONE</td>";
echo "<td>DEALER ADDRESS</td>";
echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["Dealer_id"]."</td>"."<td>".$r["D_name"]."</td>"."<td>".$r["D_phone"]."</td>"."<td>".$r["D_address"]."</td>";
    echo "</tr>";
	}
	echo "<br>";
	echo "<a href=storedp_dealer.html>Back</a>";
	
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</body>
</html>