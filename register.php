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
$sql = "INSERT INTO REGISTER (Name,Password,Phone,Address)
VALUES ('$_POST[Name]', '$_POST[Password]', '$_POST[Phone]','$_POST[Address]')";

if (mysqli_query($conn, $sql)) {
    echo "<br>"."New record created successfully";
	header( "refresh:1;url=login.html" );
    
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo "<br>";
	echo "<a href=registration.html>Back</a>";
	
}

mysqli_close($conn);
?>
</body>
</html>