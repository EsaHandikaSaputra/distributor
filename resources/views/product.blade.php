@extends('layouts.frontend')

@section('content')

	<div class="hero-wrap hero-bread" style="background-image: url({{ asset('frontend') }}/images/Al-Amir.jpeg);">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span>
					</p>
					<h1 class="mb-0 bread">Collection Products</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md order-md-last">
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/product-1.jpg" alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Sabuk Haji dan Umrah</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.75.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/kain-ihram-laki.jpeg" alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Kain Ihram laki</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.175.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/kain-ihram-cewe.jpg" alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Kain Ihram Perempuan</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.170.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Ajwa.jpeg" alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Kurma Ajwa</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.875.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Khalas-Saad.jpeg" alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Kurma Khalas Saad 10KG</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.235.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Medjol.jpeg" alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Kurma Medjol 500gr</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.80.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Ruthob-Libya.jpeg" alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Kurma Ruthob Libya 1kg</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.58.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Sukari-AlQaseem.jpeg"
										alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Kurma Sukari AlQaseem 3kg</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.98.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
							<div class="product">
								<a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Sukari-Ember-750gr.jpeg"
										alt="Colorlib Template">
									<!-- <span class="status">30%</span> -->
									<div class="overlay"></div>
								</a>
								<div class="text py-3 px-3">
									<h3><a href="{{ url('/product_detail') }}">Sukari Ember 750gr</a></h3>
									<div class="d-flex">
										<div class="pricing">
											<p class="price"><span>Rp.42.000</span></p>
										</div>
									</div>
									<p class="bottom-area d-flex px-3">
										<a href="{{ url('/cart') }}" class="add-to-cart text-center py-2 mr-1">
											<span>Add to cart <i class="ion-ios-add ml-1"></i></span>
										</a>
										<a href="https://wa.me/+6287772220288" class="buy-now text-center py-2" target="_blank">Buy now
											<span><i class="ion-ios-cart ml-1"></i></span>
										</a>
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection