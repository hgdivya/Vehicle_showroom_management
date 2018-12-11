<?php
// define variables and set to empty values
$Dealer_idErr = $D_nameErr = $D_phoneErr = $D_addressErr = "";
$Dealer_id = $D_name = $D_phone = $D_address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Dealer_id"])) {
    $Dealer_idErr = "Name is required";
  } else {
    $Dealer_id= test_input($_POST["Dealer_id"]);
  }

  if (empty($_POST["D_name"])) {
    $D_nameErr = "Email is required";
  } else {
    $D_name= test_input($_POST["D_name"]);
  }

  if (empty($_POST["D_phone"])) {
    $D_phoneErr = "email required";
  } else {
    $D_phone = test_input($_POST["D_phone"]);
  }

  if (empty($_POST["D_address"])) {
    $D_addressErr= "address required";
  } else {
    $D_address = test_input($_POST["D_address"]);
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

$sql = "INSERT INTO DEALER (Dealer_id, D_name, D_phone,D_address)
VALUES ('$Dealer_id', '$D_name', '$D_phone','$D_address')";
//VALUES ('$_GET[Salesman_id]', '$_GET[S_name]', '$_GET[S_phone]','$_GET[S_address]','$_GET[S_salary]')";

if (mysqli_query($conn, $sql)) {
     echo "<br>"."login succesful"."<br>";
	header( "refresh:1;url=ending.html" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>