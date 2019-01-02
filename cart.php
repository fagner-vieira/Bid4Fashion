<?php include 'header.php'; ?>

	<!-- Main Content -->

		<section class="cart-content">
			<div class="cart-wrapper">
				<div class="container">
					<div class="row">
						<div class="cart-inner">
							<div id="cart">  
								<div class="cart-form">
									<form action="#" method="post" id="cartform">
										<table>
										<thead>
										<tr>
											<th class="image">
												Product Name
											</th>
											<th class="price">
												Price
											</th>
											<th class="qty">
												Quantity
											</th>
											<th class="total">
												Total
											</th>
											<th class="remove">
											</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td class="image">
												<div class="product_image">
													<a href="./product-sidebar.html">
													<img src="assets/images/100x100.jpg" alt="Coco Lee, coins are Kumis brown leather bag">
													</a>
												</div>
												<div class="product_name">
													<a href="./product-sidebar.html">
													<p>
														Coco Lee, coins are Kumis brown leather bag
													</p>
													</a>
												</div>
											</td>
											<td class="price">
												<span class="money" data-currency-usd="$250.00">$250.00</span>
											</td>
											<td class="qty">
												<div class="quantity-wrapper">
													<div class="wrapper">
														<input type="number" size="4" name="updates[]" id="updates_23854925638" value="1" class="tc item-quantity">
													</div>
													<!--End wrapper-->
												</div>
												<!--End quantily wrapper-->
											</td>
											<td class="total title-1">
												<span class="money" data-currency-usd="$250.00">$250.00</span>
											</td>
											<td class="remove">
												<a href="#" class="cart"><i class="fa fa-times"></i></a>
											</td>
										</tr>
										<tr>
											<td class="image">
												<div class="product_image">
													<a href="./product-sidebar.html">
													<img src="assets/images/100x100.jpg" alt="Coco Lee, wedges with sweet chilli sauce - black / S">
													</a>
												</div>
												<div class="product_name">
													<a href="./product-sidebar.html">
													<p>
														Coco Lee, wedges with sweet chilli sauce
													</p>
													<span class="variant_title">black / S</span>
													</a>
												</div>
											</td>
											<td class="price">
												<span class="money" data-currency-usd="$200.00">$200.00</span>
											</td>
											<td class="qty">
												<div class="quantity-wrapper">
													<div class="wrapper">
														<input type="number" size="4" name="updates[]" id="updates_23854917766" value="1" class="tc item-quantity">
													</div>
													<!--End wrapper-->
												</div>
												<!--End quantily wrapper-->
											</td>
											<td class="total title-1">
												<span class="money" data-currency-usd="$200.00">$200.00</span>
											</td>
											<td class="remove">
												<a href="#" class="cart"><i class="fa fa-times"></i></a>
											</td>
										</tr>
										<tr class="summary">
											<td class="total_text" colspan="1">
												Total
											</td>
											<td class="price" colspan="4">
												<span class="total"><strong><span class="money" data-currency-usd="$450.00">$450.00</span></strong></span>
											</td>
										</tr>
										</tbody>
										</table>
										<div class="group-bottom">
											<div class="cart-buttons col-sm-12">
												<div class="buttons clearfix">
													<input type="submit" id="update-cart" class="btn" name="update" value="Update Cart">
													<input type="button" id="continue-cart" class="btn btn-3" name="continue" value="Continue Shopping" onclick="#">
													<input type="submit" id="checkout" class="btn" name="checkout" value="Proceed to CheckOut">
												</div>
											</div>
											<div class="group-checkout-input col-sm-6">
												<div class="checkout-buttons clearfix">
													<label for="note">Add a note for seller</label>
													<textarea id="note" name="note" rows="10" cols="50"></textarea>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section>
	</div> 
<?php include 'footer.php'; ?>