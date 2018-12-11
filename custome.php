<?php
// define variables and set to empty values
$Customer_idErr = $C_nameErr = $C_phoneErr = $C_addressErr = $C_genderErr = "";
$Customer_id = $C_name = $C_phone = $C_address = $C_gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Customer_id"])) {
    $Customer_idErr = "Name is required";
  } else {
    $Customer_id= test_input($_POST["Customer_id"]);
  }

  if (empty($_POST["C_name"])) {
    $C_nameErr = "Email is required";
  } else {
    $C_name= test_input($_POST["C_name"]);
  }

  if (empty($_POST["C_phone"])) {
    $C_phoneErr = "email required";
  } else {
    $C_phone = test_input($_POST["C_phone"]);
  }

  if (empty($_POST["C_address"])) {
    $C_address = "address required";
  } else {
    $C_address = test_input($_POST["C_address"]);
  }

  if (empty($_POST["C_gender"])) {
    $C_genderErr = "Gender is required";
  } else {
    $C_gender = test_input($_POST["C_gender"]);
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

$sql = "INSERT INTO CUSTOMER (Cust_id, C_name, C_phone,C_address,C_gender)
VALUES ('$Customer_id', '$C_name', '$C_phone','$C_address','$C_gender')";
//VALUES ('$_POST[Customer_id]', '$_POST[C_name]', '$_POST[C_phone]','$_POST[C_address]','$_POST[C_gender]')";

if (mysqli_query($conn, $sql)) {
     echo "<br>"."login succesful"."<br>";
	header( "refresh:1;url=vehicle.html" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>