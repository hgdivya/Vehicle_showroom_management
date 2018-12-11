<?php
$No_of_vehiclesErr = $Customer_idErr = "";
$No_of_vehicles = $Customer_id = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["No_of_vehicles"])) {
    $No_of_vehiclesErr = "Name is required";
  } else {
    $No_of_vehicles= test_input($_POST["No_of_vehicles"]);
  }
  if (empty($_POST["Customer_id"])) {
    $Customer_idErr = "Name is required";
  } else {
    $Customer_id= test_input($_POST["Customer_id"]);
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

$sql = "INSERT INTO NO_OF_VEHICLES (Cust_id,No_of_vehicles)
VALUES ('$Customer_id','$No_of_vehicles')";
//VALUES ('$_POST[Customer_id]', '$_POST[C_name]', '$_POST[C_phone]','$_POST[C_address]','$_POST[C_gender]')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>