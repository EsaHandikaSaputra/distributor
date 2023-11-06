@extends('layouts.frontend')

@section('content')

	<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend') }}/images/bg_6.jpg);">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a
								href="index.html">Product</a></span> <span>Product Single</span></p>
					<h1 class="mb-0 bread">Product Single</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="{{ asset('frontend') }}/images/menu-2.jpg" class="image-popup">
						<img src="{{ asset('frontend') }}/images/product/product-1.jpg" class="img-fluid" alt="Colorlib Template">
					</a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>Sabuk Haji dan Umrah</h3>
					<div class="rating d-flex">
						<p class="text-left">
							<a href="#" class="mr-2" style="color: #000;">1500 Pcs <span style="color: #bbb;">Sold</span></a>
						</p>
					</div>
					<p class="price"><span>Rp.75.000</span></p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel voluptas, totam aperiam molestias sed veritatis porro rem distinctio impedit hic laudantium earum, vero voluptatibus molestiae illo eius omnis facere tempora?
					</p>
					<div class="row mt-4">
						<div class="w-100"></div>
						<div class="input-group col-md-6 d-flex mb-3">
							<span class="input-group-btn mr-2">
								<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
									<i class="ion-ios-remove"></i>
								</button>
							</span>
							<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
								min="0" max="100">
							<span class="input-group-btn ml-2">
								<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
									<i class="ion-ios-add"></i>
								</button>
							</span>
						</div>
						<div class="w-100"></div>
						<div class="col-md-12">
							<p style="color: #000;">100 piece available</p>
						</div>
					</div>
					<p><a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a></p>
				</div>
			</div>
		</div>
	</section>

@endsection