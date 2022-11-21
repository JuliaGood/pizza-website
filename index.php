<?php include_once('tpl/header.php'); ?>

<section class="section" id="tasty">
  <div class="container">
    <div class="row">
      <div class="tasty_1">
        <h3>Pizza <span style="color: #da0c06;">Menu</span></h3>
      </div>

      <?php
					$products = $mysqli->query("SELECT * FROM products"); 
					while ($product = $products->fetch_assoc()) { 
			?>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="tasty_main clearfix">
          <div class="tasty_2">
            <a href="product.php?id=<?php echo $product['id']; ?>">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="img_responsive"></a>
            <h5><?php echo $product['name']; ?></h5>
            <p class="pizza-desc"><?php echo $product['description']; ?></p>
            <h4>Price: <?php echo $product['price']; ?> $</h4>
          </div>
          <div class="tasty_3">
            <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Детальніше</a>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</section>

<?php include_once('tpl/footer.php'); ?>
