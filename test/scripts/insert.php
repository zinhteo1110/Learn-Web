<?php
include_once 'dbconnect.php';
if(isset($_POST['btn-upload']))
{ 	
	//dat ten random [1000-100000+filename]
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
             $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	//get value cua form thong qua $_POST
	$serverName = $_POST['serverName'];
	$IP = $_POST['IP'];
	$Model = $_POST['model_server'];
	$CPU = $_POST['Processor'];
	$Num_Physical_CPU = $_POST['Num_Physical_CPU'];
	$Cores = $_POST['Cores'];
	$HDD = $_POST['HDD'];
	$Raid = $_POST['Raid'];
	$Rack = $_POST['Rack'];
	$Units = $_POST['Units'];
	$Serial_Number = $_POST['Serial_Number'];
	$IP_iLO = $_POST['IP_iLO'];
	$VLAN = $_POST['VLAN'];
	$KVM_Note = $_POST['KVM_Note'];
	$MAC_eth0 = $_POST['MAC_eth0'];
	$Switch = $_POST['Switch'];
	$Port = $_POST['Port'];
	$Note = $_POST['Note'];
	$folder="../images/";

	// new file size in KB
	$new_size = $file_size/1024;  
		
	// make file name in lower case
	$new_file_name = strtolower($file);
		
	$final_file=str_replace(' ','-',$new_file_name);
		
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO server(serverName,IP,Model,CPU,Num_Physical_CPU,Cores,HDD,Raid,Rack,Units,Serial_Number,IP_iLO,VLAN,KVM_Note,MAC_eth0,Switch,Port,Note,file) VALUES('$serverName','$IP','$Model','$CPU','$Num_Physical_CPU'$Cores','$HDD','$Raid','$Rack','$Units','$Serial_Number','$IP_iLO','$VLAN','$KVM_Note','$MAC_eth0','$Switch','$Port','$Note','$folder$final_file')";
		mysql_query($sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='input.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file >"< zzz so sad ==> failed input information hardware of servers');
        window.location.href='input.php?fail';
        </script>
		<?php
	}
}
?>


