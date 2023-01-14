<?php 

if (isset($_POST['submit'])) {

	require_once '../include/db.php';

	$created = add_new_menu_item($_POST);

	if ($created) {
		header('location: menubar.php?success=Menu created Successfully!');
	}
	else{
		header('location: menubar.php?error=Error occured while creating menu');
	}
}

else{
	header('location: menubar.php');
}

?>