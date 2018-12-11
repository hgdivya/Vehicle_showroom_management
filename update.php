<?php
$Customer_id=$Remaining_amt ="";
$Customer_idErr=$Remaining_amtErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Customer_id"])) {
    $Customer_idErr = "Name is required";
  } else {
    $Customer_id= test_input($_POST["Customer_id"]);
  }
  
 
  if (empty($_POST["Remaining_amt"])) {
    $Remaining_amtErr = "Email is required";
  } else {
    $Remaining_amt= test_input($_POST["Remaining_amt"]);
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
$result=mysqli_query($conn, $sql);
$res=$result->num_rows; 
$sql1 = "SELECT Total_amt from ACCOUNT_DEPARTMENT where Cust_id=$_POST[Customer_id]";

 while($r=$result->fetch_assoc()) {
        $vvv=$r["Total_amt_id"]
 }
 $vv=$vvv-$_POST["Remaining_amt"];
 
$sql = "UPDATE ACCOUNT_DEPARTMENT SET Remaining_amt= $vv where Cust_id=$_POST[Customer_id]


mysqli_close($conn);
?>