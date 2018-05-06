<?php $page_title = 'Customer Login'; ?>
<?php $page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '\\')+1); ?>
<?php require_once('../../includes/init.php'); ?>
<?php require_once(SITE_ROOT.'/includes/header.php'); ?>


<main id="content">
	<h2 id="loginHeader">Login or Create an account!</h2>
	<div class="loginForm">
		<h3>Already have an account?</h3>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label> <span class="required">*</span> Email:
				<input type="text" name="email">
			</label>
			<label> <span class="required">*</span> Password:
				<input type="password">
			</label>
		</form>
	</div>
	
	<div class="register">
		<h3>New Customer?</h3>
		<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
		<button type="button" class="btn">Register</button>
	</div>
	
</main>

<?php require_once(SITE_ROOT.'/includes/footer.php'); ?>