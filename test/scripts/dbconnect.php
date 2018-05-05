<?php
	$database_host = "localhost";
	$username = "root";
	$password = "noc;;ITS;;12345";
	$database_name = "dbinventory";

	mysql_connect("$database_host","$username","$password")
		or die("<p>Error connecting to database: " . mysql_error() . "</p>");
	echo "<p>Connected to MySQL!</p>";
	mysql_select_db("$database_name")
		or die("<p>Error selecting the database $database_name: " . mysql_error() . "</p>");
	echo "<p>Connected to MySQL, using database $database_name.</p>";
	$result = mysql_query("SHOW TABLES;");
	if(!$result) //$result === false
	{
		die("<p>Error in listing tables: " . mysql_error() . "</p>");
	}

	echo "<p>Tables in database: </p>";
	echo "<ul>";
	while($row = mysql_fetch_row($result)) {
		echo "<li>Table: {$row[0]}</li>";
	}
	echo "</ul>";
?>
