<?php 
	$page_title = 'Products'; 
	$page_dir = substr(dirname(__FILE__), strrpos(dirname(__FILE__), '\\')+1); 
	require_once('../includes/init.php');

	$conn = new Connection('localhost', 'root', '', 'bomber_skates');
	$product = new Products();

	if(isset($_GET['cat'])) {
		//		echo $product->loadCompletes('complete');
		$category = $_GET['cat'];
		
		if($category === 'shop_all') {
			$products = $product->loadAllProducts($conn->conn);			
		} else {
			$products = $product->loadProductsByCategory($conn->conn, $category);
		}
	}

	if(isset($_GET['product'])) {
		$product_id = $_GET['product'];
		$product_to_display = $product->loadProductById($conn->conn, $product_id);
	}


//	var_dump($conn);
//var_dump($products);
	require_once(SITE_ROOT.'/includes/header.php');
?>


<main id="content">

	<div class="filter-results">
		<form action="">
			<select name="brand_options" id="brand-options">
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
				<option value=""></option>
			</select>
		</form>
	</div>
	
	<div class="product-container">

	<?php if(isset($products)) { ?>
		<?php while($row = $products->fetch_assoc()) { ?>
			<div class="product-display">
				<a href="./?product=<?php echo $row['prod_id']; ?>" class="product-link">
					<img class="product-image" src="<?php echo WWW_ROOT.$row['prod_image']; ?>" alt="<?php echo $row['prod_image']; ?>">
					<p class="product-name"><?php echo $row['prod_name']; ?></p>
					<p class="product-price">$<?php echo $row['prod_price']; ?></p>
		<!--			<p class="product-description"><?php //echo $row['prod_description']; ?></p>-->
				</a>
				<button type="button" class="btn btn-add-item">Add to cart</button>
			</div>
		<?php } ?>
	<?php } ?>
	
	<?php if(isset($product_to_display)) { ?>
		<?php while($row = $product_to_display->fetch_assoc()) { ?>
			<div class="product-display">
				<a href="./?product=<?php echo $row['prod_id']; ?>" class="product-link">
					<img class="product-image" src="<?php echo WWW_ROOT.$row['prod_image']; ?>" alt="<?php echo $row['prod_image']; ?>">
					<p class="product-name"><?php echo $row['prod_name']; ?></p>
					<p class="product-price">$<?php echo $row['prod_price']; ?></p>
		<!--			<p class="product-description"><?php //echo $row['prod_description']; ?></p>-->
				</a>
				<button type="button" class="btn btn-add-item">Add to cart</button>
			</div>
		<?php } ?>
	<?php } ?>
	</div>
</main>

<?php require_once(SITE_ROOT.'/includes/footer.php'); ?>