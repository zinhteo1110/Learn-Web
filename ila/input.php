<?php
//include_once 'dbconfig.php';
// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.

	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'noc;;ITS;;12345');
	define('DBNAME', 'dbimage');

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
<title>Input Properties image</title>
<link rel="stylesheet" href="styleinput.css" type="text/css" />
</head>
<body>
<div id="header">
<label>UPLOAD</label>
</div>
<div id="body">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	Name:
	<input type="text" name="name"><br>
	Feature:
	<input type="text" name="feature"><br>
	Descript:
	<input type="text" name="descript"><br> 
	Group:
	<input type="text" name="group_category"><br>
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
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
</body>
</html>