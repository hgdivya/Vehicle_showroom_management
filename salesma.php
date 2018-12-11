<?php
// define variables and set to empty values
$Salesman_idErr = $S_nameErr = $S_phoneErr = $S_addressErr = $S_salaryErr = "";
$Salesman_id = $S_name = $S_phone = $S_address = $S_salary = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["Salesman_id"])) {
    $Salesman_idErr = "Name is required";
  } else {
    $Salesman_id= test_input($_GET["Salesman_id"]);
  }

  if (empty($_GET["S_name"])) {
    $S_nameErr = "Email is required";
  } else {
    $S_name= test_input($_GET["S_name"]);
  }

  if (empty($_GET["S_phone"])) {
    $S_phoneErr = "email required";
  } else {
    $S_phone = test_input($_GET["S_phone"]);
  }

  if (empty($_GET["S_address"])) {
    $S_address = "address required";
  } else {
    $S_address = test_input($_GET["S_address"]);
  }

  if (empty($_GET["S_salary"])) {
    $S_salaryErr = "salary is required";
  } else {
    $S_salary = test_input($_GET["S_salary"]);
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

$sql = "INSERT INTO SALESMAN (Salesman_id, S_name, S_phone,S_address,Salary)
VALUES ('$Salesman_id', '$S_name', '$S_phone','$S_address','$S_salary')";
//VALUES ('$_GET[Salesman_id]', '$_GET[S_name]', '$_GET[S_phone]','$_GET[S_address]','$_GET[S_salary]')";

if (mysqli_query($conn, $sql)) {
    echo "<br>"."login succesful"."<br>";
	header( "refresh:1;url=ending.html" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>