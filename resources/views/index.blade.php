@extends('layouts.frontend')

@section('content')
	
    <section id="home-section" class="hero">
        <div class="home-slider js-fullheight owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img js-fullheight"
                            style="background-image:url({{ asset('frontend') }}/images/banner/banner-1.jpg);">
                        </div>
                        <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Distributor Kain Ihram terbesar di Jakarta.</span>
                                <div class="horizontal">
                                    <h3 class="vr" style="background-image: url({{ asset('frontend') }}/images/divider.jpg);">
                                        Berikan kenyamanan kepada jama'ah dengan Kain Ihram kualitas terbaik.
                                    </h3>
                                    <h1 class="mb-4 mt-3">Perkenalkan identitas <span>Travel </span>melalui branding perlengkapan umroh/haji.</h1>
                                    <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Discover Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img js-fullheight"
                            style="background-image:url({{ asset('frontend') }}/images/banner/banner-2.jpg);">
                        </div>
                        <div class="one-forth d-flex js-fullheight align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Distributor Kain Ihram terbesar di Jakarta.</span>
                                <div class="horizontal">
                                    <h3 class="vr" style="background-image: url({{ asset('frontend') }}/images/divider.jpg);">
                                        Berikan kenyamanan kepada jama'ah dengan Kain Ihram kualitas terbaik.
                                    </h3>
                                    <h1 class="mb-4 mt-3">Perkenalkan identitas <span>Travel </span>melalui branding perlengkapan umroh/haji.</h1>
                                    <p><a href="#" class="btn btn-primary px-5 py-3 mt-3">Shop Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('frontend') }}/images/product/product-1.jpg);">
                    <a href="{{ asset('frontend') }}/images/video/3 TAHAP SKINCARE & 3 PRODUK SKINCARE TERAMPUH UNTUK KULIT BERJERAWAT KOMEDO.mp4" class="icon popup-youtube d-flex justify-content-center align-items-center">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h2 class="mb-4"><span style="color:#E11299;">Percayakan</span> Hajimu bersama kami</h2>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <p>
                            Kami adalah supplier / importir kurma berbagai jenis kurma yang berada di wilayah Jakarta. Bahkan tidak hanya kurma, kami juga menyediakan oleh-oleh haji seperti Air Zamzam, Kismis, Kacang Arab, Kacang Almond, Kacang Pistachio, Coklat, Buah Zuriat, Madu, Minyak Habbatussauda sampai Beras Basmati India.
                            Berbagai wilayah di Indonesia sudah kami (importir kurma) supply dengan berbagai produk kami terutama produk kurma. Dengan daya jual yang luas, tentu kami sudah dikenal oleh berbagai agen/pedagang kurma maupun oleh-oleh haji.
                            Selain penjualan grosir atau dengan minimal kuantiti, kami juga menyediakan penjualan retail bagi yang ingin membeli kurma hanya untuk konsumsi atau dalam jumlah sedikit dan bisa dilakukan pemesanan secara online maupun offline (datang ke tempat kami).
                        </p>
                        <div class="row ftco-services">
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-002-recommended"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Refund Policy</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-001-box"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Premium Packaging</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services">
                                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                                        <span class="flaticon-003-medal"></span>
                                    </div>
                                    <div class="media-body">
                                        <h3 class="heading">Superior Quality</h3>
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Best Sellers</h2>
                    <p>Dapatkan gratis pengiriman ke wilayah Jakarta dan sekitarnya.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod">
                            <img class="img-fluid" src="{{ asset('frontend') }}/images/product/product-1.jpg" alt="Colorlib Template">
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
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-stretch">
                    <!-- <div class="img" style="background-image: url({{ asset('frontend') }}/images/about/1.png);"></div> -->
                    <div class="img" style="background: #F9C5D5; background: linear-gradient(rgba(249, 197, 212, 0.5), rgba(155, 75, 75, 0.8)), url('{{ asset('frontend') }}/images/about/1.png'); background: linear-gradient(rgba(249, 197, 212, 0.5), rgba(155, 75, 75, 0.8)), url('{{ asset('frontend') }}/images/about/1.png'); background-size: cover; background-repeat: no-repeat;"></div>
                </div>
                <div class="col-md-4 py-md-5 ftco-animate">
                    <div class="text py-3 py-md-5">
                        <h2 class="mb-4">Distributor Kain Ihram terbesar di Jakarta.</h2>
                        <p class="text-">Berikan kenyamanan kepada jama'ah dengan Kain Ihram kualitas terbaik.</p>
                        <p><a href="#" class="btn btn-white px-4 py-3">Shop now</a></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 order-md-last d-flex align-items-stretch">
                    <!-- <div class="img img-2" style="background-image: url({{ asset('frontend') }}/images/about/2.png);"></div> -->
                    <div class="img" style="background: #F9C5D5; background: linear-gradient(rgba(249, 197, 212, 0.5), rgba(155, 75, 75, 0.8)), url('{{ asset('frontend') }}/images/about/2.png'); background: linear-gradient(rgba(249, 197, 212, 0.5), rgba(155, 75, 75, 0.8)), url('{{ asset('frontend') }}/images/about/2.png'); background-size: cover; background-repeat: no-repeat;"></div>
                </div>
                <div class="col-md-7 py-3 py-md-5 ftco-animate">
                    <div class="text text-2 py-md-5">
                        <h2 class="mb-4">Distributor Kain Ihram terbesar di Jakarta.</h2>
                        <p>Perkenalkan identitas Travel melalui branding perlengkapan umroh/haji.</p>
                        <p><a href="#" class="btn btn-white px-4 py-3">Shop now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Products</h2>
                    <p>Dapatkan gratis pengiriman ke wilayah Jakarta dan sekitarnya.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row"><div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
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
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Ajwa.jpeg"
                            alt="Colorlib Template">
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
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Khalas-Saad.jpeg"
                            alt="Colorlib Template">
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
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Medjol.jpeg"
                            alt="Colorlib Template">
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
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('frontend') }}/images/product/Kurma-Ruthob-Libya.jpeg"
                            alt="Colorlib Template">
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
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background: #F9C5D5;">
        <div class="container">
            <div class="row justify-content-center py-5">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10000">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10000">0</strong>
                                    <span>Products Sold</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Partner</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Awards</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection