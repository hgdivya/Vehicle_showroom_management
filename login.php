<!DOCTYPE html>
<html>
<head>
<title>mini project</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
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
$sql ="SELECT * FROM REGISTER WHERE Name='$_POST[Name]' and Password='$_POST[password]'";
$resu=mysqli_query($conn, $sql);
$res=$resu->num_rows; 

if($res ==1) {
    echo "<br>"."login succesful"."<br>";
	header( "refresh:1;url=second.html" );
    }
else {
echo "login unsuccesful";
echo "<br>";
	echo "<a href=login.html>Back</a>";
	
}

$conn->close();
?>
</body>
</html>
