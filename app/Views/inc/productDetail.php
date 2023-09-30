
	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="img/images/wa.jpg" alt=""width="20" ></a>
						</div>
						<h3>Walnuts</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>


        <div class= "row">
          <?php foreach ($products as $product): ?>
            <div calss="col-lg-3 col-md-6 text-center">
              <div class= "single-product-item">
                <div class= "product-image">
                  <a href="single-product.html"><img src="<?= $product['image']?>"alt=""></a>
                </div>
                				<h3> <?= $product['name']?></h>
                          <p class="product-price">₱<?= $product['price']?></p>
                          <p> <?=$product['description']?></p>
                          <p> <?=$product['category']?></p>
                          <p> <?=$product['quantity']?></p>
                      <a href="cart.html" class"cart-btn"><i class="fas fa-shopping-cart"></i>Add to Cart</a>
               </div>
             </div>
                      <?php endforeach; ?>
            </div>
         </div>
     </div>
  </div>
