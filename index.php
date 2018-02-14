<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bomber Skateboard Shop</title>
	
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet" href="css/main.css">
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

	<div class="branding-ad">
		<p>Branding Content Goes Here!</p>
		<span class="close">&times;</span>
	</div>
	<header>
		<div class="logo-promos-container">
			<div class="logo-container">
				<h2 class="brand-logo"><i class="fas fa-bomb"></i> Bomber Skate Shop</h2>
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
			<div class="cart-account-info">
				<ul>
					<li><i class="fas fa-shopping-cart"></i></li>
					<li><i class="fas fa-shopping-cart"></i></li>
					<li><i class="fas fa-shopping-cart"></i></li>
					<li><i class="fas fa-shopping-cart"></i></li>
				</ul>
			</div>
		</div>
		<nav>
			<div class="nav-container">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>
						<a href="#"><span>Skate</span></a>
						<div id="skate-product-links">
							<h5>Skateboard Setup</h5>
							<ul>
								<a href="?cat=complete"><li>Completes</li></a>
								<a href="?cat=decks"><li>Decks</li></a>
							</ul>
							<h5>Skateboard Components</h5>
							<ul>
								<a href="?cat=wheels"><li>Wheels</li></a>
								<a href="?cat=axles"><li>Trucks</li></a>
								<a href="?cat=bearings"><li>Bearings</li></a>
								<a href="?cat=hardware"><li>Hardware</li></a>
							</ul>
						</div>				
					</li> <!-- Skate list item -->
					<li>
						<a href="#"><span>Clothing</span></a>
						<div id="skate-clothing-links">
							<ul>
								<a href="?cat=shop_all"><li>Shop All</li></a>
								<a href="?cat=jackets"><li>Jackets</li></a>
								<a href="?cat=shirts"><li>Shirts</li></a>
								<a href="?cat=pants"><li>Pants</li></a>
								<a href="?cat=belts"><li>Belts</li></a>
								<a href="?cat=socks"><li>Socks</li></a>
								<a href="?cat=shoes"><li>Shoes</li></a>
							</ul>
						</div>				
					</li> <!-- Clothing list item -->
					<li><a href="accessories.php">Accessories</a></li>
					<li><a href="brands.php">Brands</a></li>
					<li><a href="sale.php">Sale</a></li>
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
	
	<div class="hero-image">
		<a href="#">
			<img src="../skate-images/Hero/hip_flip.JPG" alt="">
		</a>
	</div>
	<main>
		
		<div class="product-list">
			<h3>Most Popular Categories</h3>
			<ul>
				<li>
					<a href="?cat=shoes">
						<img src="../skate-images/Clothing/Shoes/nike_sb_bruin_hyperfeel_canvas_nike_men_s_skateboarding_shoe.jpg" alt="Skate Shoes">
						<span>Shoes</span>
					</a>
				</li>
				<li>
					<a href="?cat=decks">
						<img src="../skate-images/Decks/dgk-josh-kalis-100-pure-skateboard-deck.jpg" alt="Skate Decks">
						<span>Decks</span>
					</a>
				</li>
				<li>
					<a href="?cat=wheels">
						<img src="../skate-images/Wheels/spitfire-skateboard-wheels.jpg" alt="Skate Wheels">
						<span>Wheels</span>
					</a>
				</li>
				<li>
					<a href="?cat=shoes">
						<img src="../skate-images/Clothing/Shoes/nike_sb_bruin_hyperfeel_canvas_nike_men_s_skateboarding_shoe.jpg" alt="Skate Shoes">
						<span>Shoes</span>
					</a>
				</li>
				<li>
					<a href="?cat=decks">
						<img src="../skate-images/Decks/dgk-josh-kalis-100-pure-skateboard-deck.jpg" alt="Skate Decks">
						<span>Decks</span>
					</a>
				</li>
				<li>
					<a href="?cat=wheels">
						<img src="../skate-images/Wheels/spitfire-skateboard-wheels.jpg" alt="Skate Wheels">
						<span>Wheels</span>
					</a>
				</li>
			</ul>
		</div>
		
	</main>
	
	
	
	
	<!-- jQuery CDN -->
	<script
		src="http://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous">
	</script>
	
	<!-- Custom Scripts -->
	<script src="js/scripts.js"></script>
</body>
</html>


<!-- 
	<i class="fas fa-search"></i>
	<span class="glyphicons glyphicons-skateboard"></span>
	<span class="glyphicons glyphicons-402-skateboard.png"></span>
	<span class="glyphicons glyphicons-290-bomb.png"></span>
	<span class="glyphicons glyphicons-28-search.png"></span>
	
	
	http://localhost/projectPortfolio/projectRepos/Bomber-Skateshop/
  -->