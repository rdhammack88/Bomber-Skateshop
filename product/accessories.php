<?php $page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '\\')+1); ?>
<?php require_once('../includes/init.php'); ?>
<?php require_once(SITE_ROOT.'/includes/header.php'); ?>
<?php $page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '/')+1, -1); ?>

<main id="content">
	<?php echo $page_dir; ?>
</main>


<?php require_once(SITE_ROOT.'/includes/footer.php'); ?>