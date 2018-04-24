
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bomber Skateboard Shop - <?php echo $page_title; ?></title>
	
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet" href="<?php echo WWW_ROOT; ?>/css/main.css">
</head>
<body>

	<noscript>
        <div>
            <div>
                <p><strong>JavaScript seems to be disabled in your browser.</strong></p>
                <p>You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
			</div>
		</div>
    </noscript>
<!-- TEST PHP GOES HERE -->
<?php //echo SITE_ROOT; ?>

	<div class="branding-ad">
		<p>Branding Content Goes Here!</p>
		<span class="close">&times;</span>
	</div>
	<header>
		<div class="logo-promos-container">
			<div class="logo-container">
				<h2 class="brand-logo"><a href="<?php echo WWW_ROOT; ?>/"><i class="fas fa-bomb"></i> Bomber Skate Shop</a></h2>
			</div>
			<div class="promos-container">
				<div class="promo-block">
					<p class="promo-title">Free Shipping</p>
					<p class="promo-text">On orders $50+ ($3.95 otherwise)</p>
				</div>
				<div class="promo-block">
					<p class="promo-title">Free Returns</p>
					<p class="promo-text">On Shoes, Clothing, and Accessories</p>
				</div>
				<div class="promo-block">
					<p class="promo-title">No Sales Tax</p>
					<p class="promo-text">On Anything!</p>
				</div>
			</div>
			<div class="account-info">
				<ul>
<!--					<li><i class="fas fa-map"></i></li>-->
					<li class="user-account"><a href="<?php echo WWW_ROOT; ?>/customer/"><i class="fas fa-user"></i></a></li>
					<li class="gift-card"><a href=""><i class="fas fa-gift"></i></a></li>
					<li class="user-wishlist"><a href="<?php echo WWW_ROOT; ?>/customer/"><i class="fas fa-save"></i></a></li> <span>|</span>
					<li class="shopping-cart"><a href="<?php echo WWW_ROOT; ?>/customer/shopping_cart/"><i class="fas fa-shopping-cart"></i> <span class="cart-total">{<span id="cart-item-total">0</span>}</span></a></li>
				</ul>
			</div>
		</div>
		<nav>
			<div class="nav-container">
				<ul>
					<a href="#content" aria-hidden='true'></a>
					<li><a href="<?php echo WWW_ROOT; ?>/"><span>Home</span></a></li>
					<li>
						<a href="<?php echo WWW_ROOT; ?>/product/?cat=skate"><span>Skate</span></a>
						<div id="skate-product-links">
							<ul>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=shop_all"><li>Shop All</li></a>
							</ul>
							<h5>Skateboard Setup</h5>
							<ul>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=completes"><li>Completes</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=decks"><li>Decks</li></a>
							</ul>
							<h5>Skateboard Components</h5>
							<ul>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=wheels"><li>Wheels</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=axles"><li>Trucks</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=bearings"><li>Bearings</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=hardware"><li>Hardware</li></a>
							</ul>
						</div>				
					</li> <!-- Skate list item -->
					<li>
						<a href="<?php echo WWW_ROOT; ?>/product/?cat=clothing"><span>Clothing</span></a>
						<div id="skate-clothing-links">
							<ul>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=shop_all"><li>Shop All</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=jackets"><li>Jackets</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=shirts"><li>Shirts</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=pants"><li>Pants</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=belts"><li>Belts</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=socks"><li>Socks</li></a>
								<a href="<?php echo WWW_ROOT; ?>/product/?cat=shoes"><li>Shoes</li></a>
							</ul>
						</div>				
					</li> <!-- Clothing list item -->
<!--
					<li><a href="/product/accessories.php"><span>Accessories</span></a></li>
					<li><a href="/product/brands.php"><span>Brands</span></a></li>
-->
					<li><a href="<?php echo WWW_ROOT; ?>/product/sale.php"><span>Sale</span></a></li>
<!--
					<li><a href="affiliate.php">Affiliates</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact</a></li>
-->
				</ul> <!-- nav list -->
				<div class="input-group">
					<input type="search" placeholder="Search">
					<button type="button" class="btn input-group-btn"><span class="fas fa-search"></span></button>
				</div>
			</div> <!-- .nav-container -->
		</nav> <!-- nav -->
	</header> <!-- header -->
	


<?php if(strpos($page_title, 'Home') === false) : ?>
		
	<p class="bread-crumbs"><a href="<?php echo WWW_ROOT; ?>/">Home</a><span>></span><?php echo $page_title; ?></p> <!-- $page_dir -->
	
<?php endif;?>