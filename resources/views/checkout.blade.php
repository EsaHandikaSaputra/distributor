@extends('layouts.frontend')

@section('content')

	<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend') }}/images/bg_6.jpg);">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Checkout</span>
					</p>
					<h1 class="mb-0 bread">Checkout</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8 ftco-animate">
					<form action="" class="billing-form">
						<h3 class="mb-4 billing-heading">Billing Details</h3>
						<div class="row align-items-end">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstname">Firt Name</label>
									<input type="text" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="number" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailaddress">Email Address</label>
									<input type="email" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="country">State / Country</label>
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="" id="" class="form-control" required>
											<option value="Indonesia">Indonesia</option>
											<option value="Outside Indonesia">Outside Indonesia</option>
										</select>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="towncity">Town / City</label>
									<input type="text" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="postcodezip">Postcode / ZIP *</label>
									<input type="number" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="streetaddress">Street Address</label>
									<textarea type="text" class="form-control" placeholder="House number and street name" rows="10" required></textarea>
								</div>
							</div>
							<!-- <div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group mt-4">
									<div class="radio">
										<label class="mr-3"><input type="radio" name="optradio"> Create an Account?</label>
										<label><input type="radio" name="optradio"> Ship to different address</label>
									</div>
								</div>
							</div> -->
						</div>
						<div class="row mt-5 pt-3 d-flex">
							<div class="col-md-6 d-flex">
								<div class="cart-detail cart-total bg-light p-3 p-md-4">
									<h3 class="billing-heading mb-4">Cart Total</h3>
									<p class="d-flex">
										<span>Subtotal</span>
										<span>Rp.75.000</span>
									</p>
									<!-- <p class="d-flex">
										<span>Discount</span>
										<span>Rp.0</span>
									</p> -->
									<hr>
									<p class="d-flex total-price">
										<span>Total</span>
										<span>Rp.75.000</span>
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="cart-detail bg-light p-3 p-md-4">
									<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> Confirm via WhatsApp</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
												<label><input type="checkbox" value="" class="mr-2" required><span class="checkmark"></span> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
									<p><button class="btn btn-primary py-3 px-4">Place an order</button></p>
								</div>
							</div>
						</div>
					</form>
					<!-- END -->
				</div>
				<!-- .col-md-8 -->
			</div>
		</div>
	</section>
	<!-- .section -->

@endsection