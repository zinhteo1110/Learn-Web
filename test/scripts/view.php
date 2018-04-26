<!DOCTYPE html>
<html>
<body>

<?php 
	//include_once 'dbconnect.php';
	$servername = "localhost";
	$username = "root";
	$password = "noc;;ITS;;12345";
	$dbname = "dbinventory";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT serverName,IP,Model,CPU,Switch,Port FROM server";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
	//output data of each row
		while($row = $result->fetch_assoc()) {
			echo "serverName: " . $row["serverName"] . "IP: " . $row["IP"] . "Model: " . $row["Model"] . "CPU: " . $row["CPU"] . "Switch: " . $row["Switch"] . "Port: " . $row["Port"] . "<br>";
		} 
	} else {
		echo "0 results";
	}	
	$conn->close();
?>

</body>
</html>
