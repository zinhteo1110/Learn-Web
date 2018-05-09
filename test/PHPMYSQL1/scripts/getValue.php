<<<<<<< HEAD
<html>
	<head>
	 <title>TEST</title>
	</head>
	<body>
	<form action = "" method="post">
	<fieldset>
<!--
	 <label for="radio-1">ABC</label>
	 <input type="radio" name="radioA" value="ABC" id="radio-1">
	 <label for="radio-2">DEF</label>
	 <input type="radio" name="radioA" value="DEF" id="radio-2">
-->
	<input type="submit" name="action" value="Edit">
	<input type="submit" name="action" value="Delete">
	</fieldset>
	</form>
	
<?php
	if(isset($_POST['action']) and $_POST['action'] == 'Edit')
	{
		echo "you pressed button Edit";
	}
	if(isset($_POST['action']) and $_POST['action'] == 'Delete')
	{
		echo "you pressed button Delete";
	}
	
?>
</html>
=======
<html>
	<head>
	 <title>TEST</title>
	</head>
	<body>
	<form action = "" method="post">
	<fieldset>
<!--
	 <label for="radio-1">ABC</label>
	 <input type="radio" name="radioA" value="ABC" id="radio-1">
	 <label for="radio-2">DEF</label>
	 <input type="radio" name="radioA" value="DEF" id="radio-2">
-->
	<input type="submit" name="action" value="Edit">
	<input type="submit" name="action" value="Delete">
	</fieldset>
	</form>
	
<?php
	if(isset($_POST['action']) and $_POST['action'] == 'Edit')
	{
		echo "you pressed button Edit";
	}
	if(isset($_POST['action']) and $_POST['action'] == 'Delete')
	{
		echo "you pressed button Delete";
	}
	
?>
</html>
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
