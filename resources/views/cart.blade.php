@extends('layouts.frontend')

@section('content')

	<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend') }}/images/bg_6.jpg);">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
					<h1 class="mb-0 bread">My Cart</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Product</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
									<td class="image-prod">
										<div class="img" style="background-image:url({{ asset('frontend') }}/images/product/product-1.jpg);">
										</div>
									</td>
									<td class="product-name">
										<h3>Sabuk Haji dan Umrah</h3>
									</td>
									<td id="price" class="price">Rp.75.000</td>
									<td class="quantity">
										<div class="input-group mb-3">
											<span class="input-group-btn mr-2">
												<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="" style="border-radius: 0;">
													<i class="ion-ios-remove" style="color:#343a40;"></i>
												</button>
											</span>
											<input type="number" id="quantity" name="quantity" class="form-control input-number" value="" min="1" max="100" readonly>
											<span class="input-group-btn ml-2">
												<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" style="border-radius: 0;">
													<i class="ion-ios-add" style="color:#343a40;"></i>
												</button>
											</span>
										</div>
									</td>
									<td id="total" class="total"><span class="totalValue"></span></td>
								</tr>
								<!-- END TR-->
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Cart Totals</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span class="totalValue"></span>
						</p>
						<!-- <p class="d-flex">
							<span>Discount</span>
							<span class="discountValue"></span>
						</p> -->
						<hr>
						<p class="d-flex total-price">
							<span>Total</span>
							<span class="totalAllValue"></span>
						</p>
					</div>
					<p class="text-center">
						<a href="https://wa.me/+6287772220288" class="btn btn-primary py-3 px-4" target="_blank">Proceed to Checkout</a>
					</p>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('js')

	<!-- add custom rules -->
	<script src="js/rupiah.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {

			var price = 75000;
			var quantity = 1;
			var total = quantity * price;
			var totalAllValue =+ total;

			// Get the stored value
			$('#quantity').val(quantity);
			$(".totalValue").text(function() {
				return "Rp." + formatRupiah(total);
			});
			$(".totalAllValue").text(function() {
				return "Rp." + formatRupiah(totalAllValue);
			});

			$('.quantity-right-plus').click(function (e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val()) || 0;

				// If is not undefined

				$('#quantity').val(quantity + 1);
				var quantity = parseInt($('#quantity').val()) || 0;
				var total = quantity * price;
				var totalAllValue =+ total;
				
				// Get the stored value
				$(".totalValue").text(function() {
					return "Rp." + formatRupiah(total);
				});
				$(".totalAllValue").text(function() {
					return "Rp." + formatRupiah(totalAllValue);
				});

				// Increment

			});

			$('.quantity-left-minus').click(function (e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val()) || 0;

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
					var quantity = parseInt($('#quantity').val()) || 0;
					var total = quantity * price;
					var totalAllValue =+ total;
				
					// Get the stored value
					$(".totalValue").text(function() {
						return "Rp." + formatRupiah(total);
					});
					$(".totalAllValue").text(function() {
						return "Rp." + formatRupiah(totalAllValue);
					});
				}
			});
		});
	</script>

@endsection