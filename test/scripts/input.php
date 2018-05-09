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
<meta charset="UTF-8">
</head>
<body>
	<form action="insert.php" method="post" enctype="multipart/form-data">
	<!--<fieldset>
		<legend>Information Server's Hardware:</legend> -->

			<label>ServerName:</label>
			<input type="text" name="serverName">

			<label>IP:</label>
			<input type="text" name="IP">

			<label>Model:</label>
			<select name="model_server"><br>
				<option value="HP Proliant DL160 G5 Server">HP Proliant DL160 G5 Server</option>
				<option value="HP Proliant DL160 G6 Server">HP Proliant DL160 G6 Server</option>
				<option value="HP Proliant DL380 G5 Server">HP Proliant DL380 G5 Server</option>
				<option value="HP Proliant DL360 G7 Server">HP Proliant DL360 G7 Server</option>
				<option value="HP Proliant DL360p G8 Server">HP Proliant DL360p G8 Server</option>
				<option value="HP Proliant DL380 G6 Server">HP Proliant DL380 G6 Server</option>
				<option value="HP ProLiant ML350 G6 Server">HP ProLiant ML350 G6 Server</option>
				<option value="Intel S5000PAL Server">Intel S5000PAL Server</option>
				<option value="Intel SR1550">Intel SR1550</option>
				<option value="Dell PowerEdge R420 Server">Dell PowerEdge R420 Server</option>
				<option value="Dell PowerEdge R430 Server">Dell PowerEdge R430 Server</option>
				<option value="Dell PowerEdge R710 Server">Dell PowerEdge R710 Server</option>
				<option value="Dell PowerEdge R720xd Server">Dell PowerEdge R720xd Server</option>
				<option value="Dell PowerEdge R730xd Server">Dell PowerEdge R730xd Server</option>
			</select>

			<label>CPU:</label>
			<select name="Processor"><br>
				<option value="Intel® Xeon® Processor E5-2420 v2">Intel® Xeon® Processor E5-2420 v2</option>
				<option value="Intel® Xeon® Processor E5-2620">Intel® Xeon® Processor E5-2620</option>
				<option value="Intel® Xeon® Processor E5-2620 v2">Intel® Xeon® Processor E5-2620 v2</option>
				<option value="Intel® Xeon® Processor E5-2620 v3">Intel® Xeon® Processor E5-2620 v3</option>
				<option value="Intel® Xeon® Processor E5-2620 v4">Intel® Xeon® Processor E5-2620 v4</option>
				<option value="Intel® Xeon® Processor E5-2630 v2">Intel® Xeon® Processor E5-2630 v2</option>
				<option value="Intel® Xeon® Processor E5-2630 v4">Intel® Xeon® Processor E5-2630 v4</option>
				<option value="Intel® Xeon® Processor E5-2640 v2">Intel® Xeon® Processor E5-2640 v2</option>
				<option value="Intel® Xeon® Processor E5-2640 v4">Intel® Xeon® Processor E5-2640 v4</option>
				<option value="Intel® Xeon® Processor 5160">Intel® Xeon® Processor 5160</option>
				<option value="Intel® Xeon® Processor E5310">Intel® Xeon® Processor E5310</option>
				<option value="Intel® Xeon® Processor E5335">Intel® Xeon® Processor E5335</option>
				<option value="Intel® Xeon® Processor E5345">Intel® Xeon® Processor E5345</option>
				<option value="Intel® Xeon® Processor E5405">Intel® Xeon® Processor E5405</option>
				<option value="Intel® Xeon® Processor E5504">Intel® Xeon® Processor E5504</option>
				<option value="Intel® Xeon® Processor E5530">Intel® Xeon® Processor E5530</option>
				<option value="Intel® Xeon® Processor E5540">Intel® Xeon® Processor E5540</option>
				<option value="Intel® Xeon® Processor E5620">Intel® Xeon® Processor E5620</option>
				<option value="Intel® Xeon® Processor E5640">Intel® Xeon® Processor E5640</option>
				<option value="Intel® Xeon® Processor E5645">Intel® Xeon® Processor E5645</option>
				<option value="Intel® Xeon® Processor X5650">Intel® Xeon® Processor X5650</option>
				<option value="Intel® Xeon® Processor X5670">Intel® Xeon® Processor X5670</option>
			</select>



		<!--
		<div id="block-2">
			<label>1 x CPU</lable>
			<input type="radio" name="Num_Physical_CPU" value="1 CPU">
			<label>2 x CPU</label>
			<input type="radio" name="Num_Physical_CPU" value="2 CPU">
		</div>
	-->

			<label>Phy_CPU:</label>
			<select name="Num_Physical_CPU"><br>
				<option value="1 x CPU">1 x CPU</option>
				<option value="2 x CPU">2 x CPU</option>
			</select>

			<label>Cores:</label>
			<input type="text" name="Cores"><br>

			<label>HDD:</label>
			<input type="text" name="HDD"><br>

			<label>Raid:</label>
			<input type="text" name="Raid"><br>

			<label>Rack:</label>
			<input type="text" name="Rack"><br>

			<label>Units:</label>
			<input type="text" name="Units"><br>

			<label>Serial_Number:</label>
			<input type="text" name="Serial_Number"><br>

			<label>IP_iLO:</label>
			<input type="text" name="IP_iLO"><br>

			<label>VLAN:</label>
			<input type="text" name="VLAN"><br>

			<label>KVM_Note:</label>
			<input type="text" name="KVM_Note"><br>

			<label>MAC_eth0:</label>
			<input type="text" name="MAC_eth0"><br>

			<label>Switch:</label>
			<input type="text" name="Switch"><br>

			<label>Port:</label>
			<input type="text" name="Port"><br>

			<label>Note:</label>
			<input type="text" name="Note"><br>

			<input type="file" name="file" />
			<button type="submit" name="btn-upload">SAVE</button>
	<!--
	</fieldset>-->
    <br /><br />

    <?php
			if(isset($_GET['success']))
			{
		?>
        <p>File Uploaded Successfully...  <a href="view1.php">click here to view file.</a></p>
    <?php
			}
			else if(isset($_GET['fail']))
			{
		?>
        <p>Problem While File Uploading! XYZ...</p>
    <?php
			}
			else
			{
		?>
        <p>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</p>
    <?php
			}
			?>
</form>
</body>
</html>
