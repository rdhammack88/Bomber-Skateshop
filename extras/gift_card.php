<?php 
	$page_title = 'Customer Profile';
	$page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '\\')+1); 
	require_once('../includes/init.php');
	
	if(!isset($_SESSION['logged_user'])) {
//		header("Location: $www_root/customer/account/login.php");
	}

	require_once(SITE_ROOT.'/includes/header.php'); 
?>

<main id="content">
	<br>
</main>

<?php require_once(SITE_ROOT.'/includes/footer.php'); ?>