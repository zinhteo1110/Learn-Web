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
	
-------------------------------------------------------------------------------
