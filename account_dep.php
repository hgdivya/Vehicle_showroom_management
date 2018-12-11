<?php
$Payment_type = $Tax = $Purchase_date = $Amt_paid = $Customer_id= $Veh_id=$Remaining_amt=$Total_amt ="";
$Payment_typeErr = $TaxErr = $Purchase_dateErr = $Amt_paidErr = $Customer_idErr= $Veh_idErr=$Remaining_amtErr =$Total_amtErr= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Customer_id"])) {
    $Customer_idErr = "Name is required";
  } else {
    $Customer_id= test_input($_POST["Customer_id"]);
  }
   if (empty($_POST["Payment_type"])) {
    $Payment_typeErr = "Name is required";
  } else {
    $Payment_type= test_input($_POST["Payment_type"]);
  }
   if (empty($_POST["Tax"])) {
    $TaxErr = "Name is required";
  } else {
    $Tax= test_input($_POST["Tax"]);
  }
   if (empty($_POST["Purchase_date"])) {
    $Purchase_dateErr = "Name is required";
  } else {
    $Purchase_date= test_input($_POST["Purchase_date"]);
  }
   if (empty($_POST["Amt_paid"])) {
    $Amt_paidErr = "Name is required";
  } else {
    $Amt_paid= test_input($_POST["Amt_paid"]);
  }
  if (empty($_POST["Veh_id"])) {
    $Veh_idErr = "Email is required";
  } else {
    $Veh_id= test_input($_POST["Veh_id"]);
  }
  if (empty($_POST["Total_amt"])) {
    $Total_amtErr = "Email is required";
  } else {
    $Total_amt= test_input($_POST["Total_amt"]);
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

$sql = "INSERT INTO ACCOUNT_DEPARTMENT (Payment_type,Amount_paid,Purchase_date,Cust_id,Veh_id,Total_amt)

VALUES ('$Payment_type','$Amt_paid','$Purchase_date','$Customer_id','$Veh_id','$Total_amt')";

if (mysqli_query($conn, $sql)) {
     echo "<br>"."login succesful"."<br>";
	header( "refresh:1;url=sales_to.html" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>