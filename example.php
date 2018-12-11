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
/*$sql = "delete from NO_OF_VEHICLES where Cust_id='7'";

if(mysqli_query($conn, $sql)===true)
{
	echo "<br>"."success";
}
else
{
	echo "<br>"."fail".$conn->error;
}*/
$res=$result->num_rows; 
echo "<table>";
echo "<tr>";
echo "<td>CUSTOMER_ID</td>";
echo "<td>VEHICLES</td>";
echo "</tr>";
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo "<td>".$r["Cust_id"]."</td>"."<td>".$r["No_of_vehicles"]."</td>";
    echo "</tr>";
	}
	
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>