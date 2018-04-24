<?php 
	$page_title = 'Products'; 
	$page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '\\')+1); 
	require_once('../includes/init.php');

	if(isset($_GET['cat'])) {
		//		echo $product->loadCompletes('complete');
		$category = $_GET['cat'];
		$product = new Products();
		
		if($category === 'shop_all') {
			$products = $product->loadAllProducts($conn->conn);			
		} else {
			$products = $product->loadProductsByCategory($conn->conn, $category);
		}
		

	}


	
//var_dump($products);
	require_once(SITE_ROOT.'/includes/header.php');
?>


<main id="content">

	<div class="filter-results">
		
	</div>
	
	<div class="product-container">

	<?php while($row = $products->fetch_assoc()) { ?>
		<div class="product-display">
			<a href="#" class="product-link">
				<img class="product-image" src="<?php echo WWW_ROOT.$row['prod_image']; ?>" alt="<?php echo $row['prod_image']; ?>">
				<p class="product-name"><?php echo $row['prod_name']; ?></p>
				<p class="product-price">$<?php echo $row['prod_price']; ?></p>
	<!--			<p class="product-description"><?php //echo $row['prod_description']; ?></p>-->
			</a>
			<button type="button" class="btn btn-add">Add to cart</button>
		</div>
	<?php } ?>
		
	</div>
</main>

<?php //require_once(SITE_ROOT.'/includes/footer.php'); ?>