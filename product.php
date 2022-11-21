<?php include ('tpl/header.php'); ?>	 

<section class="section center-container">
    <div class="content-container">
      <?php
      if (!empty($_GET['id'])) {
        $productId = $_GET['id'];
        $products = $mysqli->query("SELECT * FROM products WHERE id='$productId'");
        $product = $products->fetch_assoc();
      ?>
       <h3><?php echo $product['name']; ?></h3>
       <div class="img-container">
         <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" />
       </div>
       <p><?php echo $product['description']; ?></p>
       <p class="product-price">Ціна: <?php echo $product['price']; ?> $</p>

       <?php if (!empty($_SESSION['login'])) { ?>
       <h4 class="product-h4">Замовити піцу</h4>
          <form action="order.php" method="post" class="order-form">
              <div class="form-group">
                  <label>Ваше ім'я:</label>
                  <input name="name" type="text" size="15" maxlength="15" class="form-control" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>">
              </div>
              <div class="form-group">
                  <label>Номер телефону:</label>
                  <input name="phone" type="telephone" size="15" maxlength="15" class="form-control">
              </div>
              <div class="form-group">
                  <label>Кількість:</label>
                  <input name="quantity" type="number" value="1" min="1" max="100" class="form-control">
              </div>
              <input name="product_id" type="hidden" type="text" value="<?php echo $productId; ?>">
              <button type="submit" class="btn btn-primary">Замовити</button>
          </form>
          <hr/>
      <?php } else { ?>
        <p class="order-warning">Щоб замовити піцу треба зареєструватися або увійти у свій аккаунт!</p> 
        <hr/>
      <?php } ?>

        <?php
         $testiminails = $mysqli->query("SELECT * FROM testimonials WHERE product_id='$productId'");
        ?>

        <?php if ($testiminails->num_rows > 0) { ?>
          <h4 class="product-h4">Відгуки про піцу</h4>

          <div class="testimonials" id="testimonials">
            <?php
              while ($testiminail = $testiminails->fetch_assoc()) { 
            ?>
            <div class="testim-item">
              <div class="testim-name"><?php echo $testiminail['name']; ?></div>
              <div class="testim-text"><?php echo $testiminail['text']; ?></div>
            </div>
            <?php } ?>
          </div>
          <hr/>
        <?php } ?>

        <?php if (!empty($_SESSION['login'])) { ?>
          <div class="testimonials-form">
          <h4 class="product-h4">Залишіть свій відгук</h4>
          <form action="save_testimonials.php" method="post" class="order-form">
              <div class="form-group">
                  <label>Ваш відгук:</label>
                  <textarea name="text" cols="38" rows="3" class="form-control"></textarea>
              </div>
              <input name="product_id" type="hidden" type="text" value="<?php echo $productId; ?>">
              <button type="submit" class="btn btn-primary">Відправити</button>
          </form>
          </div>
        <?php } ?> 

      <?php } else { ?> 
        <p>Товар не знайдено</p>
      <?php } ?>   

    </section>

<?php include_once('tpl/footer.php'); ?>