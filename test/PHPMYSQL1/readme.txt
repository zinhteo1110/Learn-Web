<<<<<<< HEAD
- File html voi <form> chua action ==> den 1 file .php
	+ trong file html co input de nhap name.
- File .php voi $_REQUEST['name'] se lay duoc gia tri cua name trong input cua file html

==> phai co <form>

---------------------------------------------------------------------------
Ap dung trong file .../Learn-Web/ila/home.php
tao form cho cac button | radio thuoc category.
	$result = $_REQUEST['name'];
        $sql="SELECT * FROM tbl_images WHERE group_category = '$result'";
	
	==> FAIL (Error)
	-----------------------------
	$sql="SELECT * FROM tbl_images WHERE group_category = 'Transportation'";
	or
	$sql="SELECT * FROM tbl_images WHERE group_category = 'Food'";
	==> SUCCESSFUL
	
	khi do se hien thi dung image Food | Transportation.
Note!:The information from that HTML page is stored in $_REQUEST, which is a
special variable in PHP.	
-------------------------------------------------------------------------------
[String_PHP]
	- strpos
		
		
	- trim
		: Remove whitespaces from both sides of a string.
		: Remove characters from both sides of a string ("He" in "Hello" and "d!" in "World!")
		<?php
			$str = "Hello World!";
			echo $str . "<br>";
			echo trim($str,"Hed!");
		?>
		
		: Remove newlines (\n) from both sides of a string.
	-str_replace
		str_replace(find,replace,string,count)
		==> str_replace("world","Peter","Hello world!");
=======
- File html voi <form> chua action ==> den 1 file .php
	+ trong file html co input de nhap name.
- File .php voi $_REQUEST['name'] se lay duoc gia tri cua name trong input cua file html

==> phai co <form>

---------------------------------------------------------------------------
Ap dung trong file .../Learn-Web/ila/home.php
tao form cho cac button | radio thuoc category.
	$result = $_REQUEST['name'];
        $sql="SELECT * FROM tbl_images WHERE group_category = '$result'";
	
	==> FAIL (Error)
	-----------------------------
	$sql="SELECT * FROM tbl_images WHERE group_category = 'Transportation'";
	or
	$sql="SELECT * FROM tbl_images WHERE group_category = 'Food'";
	==> SUCCESSFUL
	
	khi do se hien thi dung image Food | Transportation.
Note!:The information from that HTML page is stored in $_REQUEST, which is a
special variable in PHP.	
-------------------------------------------------------------------------------
[String_PHP]
	- strpos
		
		
	- trim
		: Remove whitespaces from both sides of a string.
		: Remove characters from both sides of a string ("He" in "Hello" and "d!" in "World!")
		<?php
			$str = "Hello World!";
			echo $str . "<br>";
			echo trim($str,"Hed!");
		?>
		
		: Remove newlines (\n) from both sides of a string.
	-str_replace
		str_replace(find,replace,string,count)
		==> str_replace("world","Peter","Hello world!");
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
