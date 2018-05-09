<<<<<<< HEAD
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
             $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$file_feature = $_POST['feature'];
	$file_name = $_POST['name'];
	$file_descript = $_POST['descript'];
	$file_group = $_POST['group_category'];
	$folder="assets/images/transportation/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
		
	// make file name in lower case
	$new_file_name = strtolower($file);
		
	$final_file=str_replace(' ','-',$new_file_name);
		
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_images(file,feature,name,descript,group_category) VALUES('$folder$final_file','$file_feature','$file_name','$file_descript','$file_group')";
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
		alert('error while uploading file >"< zzz so sad');
        window.location.href='input.php?fail';
        </script>
		<?php
	}
}
=======
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
             $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$file_feature = $_POST['feature'];
	$file_name = $_POST['name'];
	$file_descript = $_POST['descript'];
	$file_group = $_POST['group_category'];
	$folder="assets/images/transportation/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
		
	// make file name in lower case
	$new_file_name = strtolower($file);
		
	$final_file=str_replace(' ','-',$new_file_name);
		
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_images(file,feature,name,descript,group_category) VALUES('$folder$final_file','$file_feature','$file_name','$file_descript','$file_group')";
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
		alert('error while uploading file >"< zzz so sad');
        window.location.href='input.php?fail';
        </script>
		<?php
	}
}
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
?>