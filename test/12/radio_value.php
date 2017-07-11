<?php
if (isset($_POST['submit'])) {
if(isset($_POST['radio']))
{
	?>
	<br>
<?php
	echo "<span>You have selected : <br><b> ".$_POST['radio']."</b></span>";
}
else{ echo "<span>Please choose any radio button.</span>";}
}
?>