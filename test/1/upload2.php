<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	$uploadOk = 1;
	
	//Check if image file is a actual image or fake image
	$check = getimagesize($file_loc);
	if($check !== false)
	{
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	}
	else
	{
		echo "File is not an image";
		$uploadOk = 0;
	}
}

	//Check if file already exists
	if (file_exists($file))
	{
		echo "Sorry, file already exists."
		$uploadOk = 0;
	}

	//Check file size
	if ($file_size > 500000)
	{
		echo "Sorry, your file is too large."
		$uploadOk = 0;
	}

	//Allow certain file formats
	if($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" && $file_type != "gif")
	{
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."
		$uploadOk = 0;
	}



	// new file size in KB
	$new_size = $file_size/1024;  
		
	// make file name in lower case
	$new_file_name = strtolower($file);
		
	$final_file=str_replace(' ','-',$new_file_name);


	//Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0)
	{
		echo "Sorry, your file was not uploaded.";
	}	
	//if everything is ok, try to upload file
	else
	{
		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
			mysql_query($sql);
			echo "The file" . $final_file . "has been uploaded. =)");
?>
			<a href=view.php>Click here to view file</a>;
<?php
		}
		else
		{
			echo "Sorry, there was an error uploading your file.";
		}
	}
?>

<!--	
//	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
//		$sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
//		mysql_query($sql);
//		?>
//		<script>
//		alert('successfully uploaded');
//      window.location.href='index.php?success';
//        </script>
//		<?php
//	}
//	else
//	{
//		?>
		  <script>
//		alert('error while uploading file >"<');
//        window.location.href='index.php?fail';
//        </script>
//		<?php
//	}
//}
//?>
