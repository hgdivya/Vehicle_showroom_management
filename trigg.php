<?php
$Veh_idErr = $V_typeErr = $V_modelErr = $CostErr = $ColorErr =$Customer_idErr=$Dealer_idErr='';
$Veh_id= $V_type = $V_model = $Cost = $Color =$Customer_id=$Dealer_id='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Dealer_id"])) {
    $Dealer_idErr = "Name is required";
  } else {
    $Dealer_id= test_input($_POST["Dealer_id"]);
  }
  if (empty($_POST["Customer_id"])) {
    $Customer_idErr = "Name is required";
  } else {
    $Customer_id= test_input($_POST["Customer_id"]);
  }

  if (empty($_POST["Veh_id"])) {
    $Veh_idErr = "Email is required";
  } else {
    $Veh_id= test_input($_POST["Veh_id"]);
  }

  if (empty($_POST["V_type"])) {
    $V_typeErr = "email required";
  } else {
    $V_type = test_input($_POST["V_type"]);
  }

  if (empty($_POST["V_model"])) {
    $V_modelss = "address required";
  } else {
    $V_model = test_input($_POST["V_model"]);
  }

  if (empty($_POST["Cost"])) {
    $CostErr = "Gender is required";
  } else {
    $Cost = test_input($_POST["Cost"]);
  }
   if (empty($_POST["Color"])) {
    $ColorErr = "Gender is required";
  } else {
    $Color = test_input($_POST["Color"]);
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

$sql = "UPDATE ACCOUNT_DEPARTMENT SET Amount_paid=$_POST[value1] where Cust_id='$_POST[value2]'";

if (mysqli_query($conn, $sql)) {
    echo "<br>"."update succesful"."<br>";
	header( "refresh:1;url=ending.html" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>