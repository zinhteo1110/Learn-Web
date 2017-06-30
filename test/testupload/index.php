<?php
  include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
  <title>File Uploading With PHP and MySql</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>
  <body>
    <div id="header">
      <lable>File Uploading With PHP and MySQL</lable>
    </div>
    <!--end div header -->

    <div id="body">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <button type="submit" name="btn-upload">upload</button>
      </form>
      <!-- end form -->
      <br /><br />

      <?php
        if(isset($_GET['success']))
        {
      ?>
          <label>File Uploaded Successfully... <a href="view.php">Click here to view file.</a></label>
          <?php
        }
      else if(isset($_GET['fail']))
      {
          ?>
          <label>Problem White File Uploading !</label>
          <?php
      }
      else {
          ?>
            <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP, etc...)</label>
            <?php
      }
            ?>
      </div>
      <!-- end div body -->

      <div id="footer">
        <label>By <a href="http://duongngochai3000.blogspot.com">duongngochai3000.blogspot.com</a></label>
      </div>
      <!-- end footer -->
    </body>
  </html>
