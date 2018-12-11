<!DOCTYPE html>
<html>
<head>
<title>mini project</title>
<link rel="stylesheet" type="text/css" href="stylesheet1.css">
</head>
<body>

<h1>RATING</h1>
<form  id="form1"action="#" method="POST">
<label for="rating">How much willyou rate out of 5:</label>
<input type='number' name='rating' value=""><br><br>
<input type='submit'>
</form>
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
echo " ";
$sql = "INSERT INTO RATING VALUES ('$_POST[rating]')";

if (mysqli_query($conn, $sql)) {
    echo "<br>"." "."<br>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
<h1>THE AVERAGE RATING</h1>
<?php
$sql ="call rate()";
$result=mysqli_query($conn, $sql);

$res=$result->num_rows; 
if($res > 0) {
    // output data of each row
	echo "<tr>";
    while($r=$result->fetch_assoc()) {
        echo $r["avg(rating)"]."/5";
    echo "</tr>";
	}

	
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</body>
</html>
