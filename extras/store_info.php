<?php $page_title = 'Find a store'; ?>
<?php $page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '\\')+1); ?>
<?php require_once('../includes/init.php'); ?>
<?php require_once(SITE_ROOT."/includes/header.php"); ?>


<main id="content">
	<div id="bss-map"></div>
	
	<div id="storeInfo">
		<p id="storeName"></p>
		<p id="storeAddress"></p>
		<p id="storeHours"></p>
		<p id="storeContact"></p>
	</div>
	
<!--
	<div id="storeInfo">
		<p id="storeName"></p>
		<p id="storeAddress"></p>
		<p id="storeHours"></p>
		<p id="storeContact"></p>
	</div>
-->
</main>

<?php require_once(SITE_ROOT."/includes/footer.php"); ?>

