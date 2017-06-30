<?php
    include("mysqlconnect.php");

    function GetImageExtension($imagetype)
    {
      if(empty($imagetype)) return false;
      switch($imagetype)
      {
        case 'image/bmp' : return '.bmp';
        case 'image/gif' : return '.gif';
        case 'image/jpeg': return '.jpeg';
        case 'image/png' : return '.png';
        case 'image/jpg' : return '.jpg';
      }
    }

    if (!empty($_FILES["uploadimage"]["name"])) {
      $file_name=$_FILES["uploadedimage"]["name"];
      $temp_name=$_FILES["uploadimage"]["tmp_name"];
      $imgtype=$_FILES["uploadimage"]["type"];
      $ext= GetImageExtension($imagetype);
      $imagename=date("d-m-Y")."-".time().$ext;
      $target_path="images/".$imagename;


      if(move_uploaded_file($temp_name, $target_path)){
        $query_upload="INSERT into 'images_tbl' ('images_path','submission_date')
        VALUES
        ('".$target_path."','".date("Y-m-d")."')";
          mysql_query($query_upload) or die ("error in $query_upload ==---->".mysql_error());
      }
      else {
        exit("Error while uploading image on the server");
      }
    }
?>
