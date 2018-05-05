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
<div id="grid">
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
<!--
	<form action="upload.php" method="post" enctype="multipart/form-data">
-->
	<form action="insert.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Information Server's Hardware:</legend>
		<!--div class="block-1"-->
		<div id="block-1">
			<label>ServerName:</label>
			<input type="text" name="serverName">
		</div>
		<!--div class="block-1"-->
		<div id="block-1">
			<label>IP:</label>
			<input type="text" name="IP">
		</div>
		<div class="block-1">
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
		</div>
		<div class="block-1">
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
		</div>
		<div id="block-2">
			<input type="radio" name="Num_Physical_CPU" value="1 CPU">1 x CPU<br>
			<input type="radio" name="Num_Physical_CPU" value="2 CPU">2 x CPU<br>
		</div>
		<!--div class="block-1"-->
		<div id="block-1">
			<label>Cores:</label>
			<input type="text" name="Cores"><br>
		</div>
		<div class="block-1">
			<label>HDD:</label>
			<input type="text" name="HDD"><br>
		</div>
		<div class="block-1">
			<label>Raid:</label>
			<input type="text" name="Raid"><br>
		</div>
		<div class="block-1">
			<label>Rack:</label>
			<input type="text" name="Rack"><br>
		</div>
		<div class="block-1">
			<label>Units:</label>
			<input type="text" name="Units"><br>
		</div>
		<div class="block-1">
			<label>Serial_Number:</label>
			<input type="text" name="Serial_Number"><br>
		</div>
		<div class="block-1">
			<label>IP_iLO:</label>
			<input type="text" name="IP_iLO"><br>
		</div>
		<div class="block-1">
			<label>VLAN:</label>
			<input type="text" name="VLAN"><br>
		</div>
		<div class="block-1">
			<label>KVM_Note:</label>
			<input type="text" name="KVM_Note"><br>
		</div>
		<div class="block-1">
			<label>MAC_eth0:</label>
			<input type="text" name="MAC_eth0"><br>
		</div>
		<div class="block-1">
			<label>Switch:</label>
			<input type="text" name="Switch"><br>
		</div>
		<div class="block-1">
			<label>Port:</label>
			<input type="text" name="Port"><br>
		</div>
		<div class="block-1">
			<label>Note:</label>
			<input type="text" name="Note"><br>
		</div>
		<div id="block-3">
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
        <label>File Uploaded Successfully...  <a href="view1.php">click here to view file.</a></label>
    <?php
			}
			else if(isset($_GET['fail']))
			{
		?>
        <label>Problem While File Uploading! XYZ...</label>
    <?php
			}
			else
			{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
    <?php
			}
			?>

</div><!--end div id="body"-->
<div id="footer">
		<label>By <a href="http://duongngochai3000.blogspot.com">duongngochai3000.blogspot.com</a></label>
</div>
</div><!--end div id="wrapper"-->
</div><!--end div id="grid"-->
</body>
</html>
