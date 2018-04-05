<?php 
	//This works fine
	echo '<br />1)-->Requiring Once: ';
	require_once 'include_me.php';

	//This works fine as well
	echo '<br />2)-->Including: ';
	include 'include_me.php';

	//Nothing happens as file is already included
	echo '<br />3)-->Including Once: ';
	include_once 'include_me.php';

	//This is fine
	echo '<br />4)-->Requiring: ';
	require 'include_me.php';

	//Again nothing happens - the file is included
	echo '<br />5)-->Requiring Once again: ';
	require_once 'include_me.php';

	//produces a warning message as the file doesn't exist
	echo '<br />6)-->Include the wrong file: ';
	include 'include_wrong.php';

	//Produces a fatal error and script execution halts
	echo '<br />7)-->Requiring the wrong file: '
	require 'include_wrong.php';

	//This will never be executed as we have a fatal error
	echo '<br />8)-->Including again: ';
	include 'include_me.php'
?>
