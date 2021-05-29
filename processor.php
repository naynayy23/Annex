<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollment";


$name = isset($_POST['name']) ? $_POST['name'] : '';
$dept = isset($_POST['dept']) ? $_POST['dept'] : '';
$major = isset($_POST['major']) ? $_POST['major'] : '';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check Variables are set
if( isset($_POST['name']) && isset($_POST['dept']) && (isset($_POST['dept']) ))
{
	// Input statement
	$sql = "INSERT INTO `studinfo` (`name`, `dept`, `major`)
	VALUES (\"$name\", \"$dept\", \"$major\")";
}

// Input function
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Console output
echo $name . "<br>";
echo $dept . "<br>";
echo $major . "<br>";

// Disconnect
mysqli_close($conn);

?>