<?php
$Salesman_idErr = $Cust_idErr = "";
$Salesman_id = $Cust_id = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Salesman_id"])) {
    $Salesman_idErr = "Name is required";
  } else {
    $Salesman_id= test_input($_POST["Salesman_id"]);
  }
  if (empty($_POST["Cust_id"])) {
    $Cust_idErr = "Name is required";
  } else {
    $Cust_id= test_input($_POST["Cust_id"]);
  }
}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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

$sql = "INSERT INTO SALES_TO (Salesman_id, Cust_id)
VALUES ('$Salesman_id', '$Cust_id')";

if (mysqli_query($conn, $sql)) {
    echo "<br>"."login succesful"."<br>";
	header( "refresh:1;url=no_of_vehicles.html" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>