<?php $page_title = 'About Us'; ?>
<?php $page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '\\')+1); ?>
<?php require_once('../includes/init.php'); ?>
<?php require_once(SITE_ROOT."/includes/header.php"); ?>

<main id="content">
	<div id="about-content">
		<div class="about-column">
			<div class="about-description">
				<h3>Who we are</h3>
				<p>Searching for skate gear that will take your style game to the next level? This collection of new products at Bomber Skate Shop includes dozens of great options for looking cool while you coast on your board. From the newest kicks to sunglasses and other accessories, this collection is always being updated with our latest and greatest finds.</p>
			</div>
			<div class="about-image"><img src="<?php echo WWW_ROOT; ?>/skate-images/Hero/hip_flip_2.JPG" alt=""></div>
		</div>
		<div class="about-column">
			<div class="about-image"><img src="<?php echo WWW_ROOT; ?>/skate-images/Hero/skate.jpg" alt=""></div>
			<div class="about-description">
				<h3>Our Mission</h3>
				<p>One of the perks of shopping at Bomber Skate Shop is that all of our products come from trusted and respected brands. Names like Nike SB, Adidas, Vans, Volcom, Primitive, Thrasher and more will often pop up in our new arrivals section, giving you a glimpse at the coolest new gear coming into the market.</p>
			</div>
		</div>
		<div class="about-column">
			<div class="about-description">
				<h3>Come on Down!</h3>
				<p>This selection of new arrivals is also a great starting point for those who want to give a gift to a skater they know and love. If you have a brother, sister, daughter, son, friend or family member who’s obsessed with all things skateboarding, you’re sure to find a creative and cool gift in this collection. At Bomber Skate Shop, we offer the best gear.</p>
			</div>
			<div class="about-image"><img src="<?php echo WWW_ROOT; ?>/skate-images/Hero/hip_tired.JPG" alt=""></div>
		</div>
	</div>
</main>

<?php require_once(SITE_ROOT."/includes/footer.php"); ?>