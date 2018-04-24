<?php
//include_once 'dbconfig.php';
// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.

	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'noc;;ITS;;12345');
	define('DBNAME', 'dbinventory');

	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);

	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}

	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>INPUT INVENTORY</title>
<!--link rel="stylesheet" href="../css/style.css" type="text/css" /-->
<link rel="stylesheet" href="../css/main.css" type="text/css" />
</head>
<body>
<div id="wrapper">
<div id="header">
<pre>
<h2>
    /=========\	
   |INPUT DATA|
   \=========/
 </h2>
</pre>
</div>
<div id="body">
	<form action="insert.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Information Server's Hardware:</legend>
		<!--h3>Information Server's Hardware:</h3-->
		<div class="block">
			<label>ServerName:</label>
			<input type="text" name="serverName"><br>
		</div>
		<div class="block">
			<label>IP:</label>
			<input type="text" name="IP"><br>
		</div>
		<div class="block">
			<label>Model:</label>
			<input type="text" name="Model"><br> 
		</div>
		<div class="block">
			<label>CPU:</label>
			<input type="text" name="CPU"><br>
		</div>
		<div class="block">
			<label>Cores:</label>
			<input type="text" name="Cores"><br>
		</div>
		<div class="block">
			<label>HDD:</label>
			<input type="text" name="HDD"><br>
		</div>
		<div class="block">
			<label>Raid:</label>
			<input type="text" name="Raid"><br>
		</div>
		<div class="block">
			<label>Rack:</label>
			<input type="text" name="Rack"><br>
		</div>
		<div class="block">
			<label>Units:</label>
			<input type="text" name="Units"><br>
		</div>
		<div class="block">
			<label>Serial_Number:</label>
			<input type="text" name="Serial_Number"><br>
		</div>
		<div class="block">
			<label>IP_iLO:</label>
			<input type="text" name="IP_iLO"><br>
		</div>
		<div class="block">
			<label>VLAN:</label>
			<input type="text" name="VLAN"><br>
		</div>
		<div class="block">
			<label>KVM_Note:</label>
			<input type="text" name="KVM_Note"><br>
		</div>
		<div class="block">
			<label>MAC_eth0:</label>
			<input type="text" name="MAC_eth0"><br>
		</div>
		<div class="block">
			<label>Switch:</label>
			<input type="text" name="Switch"><br>
		</div>
		<div class="block">
			<label>Port:</label>
			<input type="text" name="Port"><br>
		</div>
		<div class="block">
			<label>Note:</label>
			<input type="text" name="Note"><br>
		</div>
			
			<input type="file" name="file" />
			<button type="submit" name="btn-upload">SAVE</button>
	</fieldset>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label> -->
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading! ABC...</label>  -->
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label> -->
        <?php
	}
	?>
</div>
<div id="footer">
<label>By <a href="http://duongngochai3000.blogspot.com">duongngochai3000.blogspot.com</a></label>
</div>
</div><!--end div id="wrapper"-->
</body>
</html>