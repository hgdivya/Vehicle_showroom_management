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
$sql ="SELECT * FROM  SALESMAN";
$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>SALESMAN ID</td>";
echo "<td>SALESMAN NAME</td>";
echo "<td>SALESMAN PHONE</td>";
echo "<td>SALESMAN ADDRESS</td>";
echo "<td>SALARY</td>";
echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["Salesman_id"]."</td>"."<td>".$r["S_name"]."</td>"."<td>".$r["S_phone"]."</td>"."<td>".$r["S_address"]."</td>"."<td>".$r["Salary"]."</td>";
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