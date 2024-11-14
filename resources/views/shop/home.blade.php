<x-shop-layout>
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big">
        <div class="home-slide home-slide1 banner d-flex align-items-center">
            <img class="slide-bg" src="{{ asset('shop/assets/images/demoes/demo3/slider/slide1.jpg') }}"
                style="background-color: #ecc" alt="home banner" />
            <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                <h2>Winter Fashion Trends</h2>
                <h3 class="text-uppercase mb-0">Get up to 30% off</h3>
                <h4 class="m-b-4">on Jackets</h4>

                <h5 class="text-uppercase">
                    Starting at<span class="coupon-sale-text"><sup>$</sup>199<sup>99</sup></span>
                </h5>
                <a href="demo3-shop.html" class="btn btn-dark btn-xl" role="button">Shop Now</a>
            </div>
            <!-- End .banner-layer -->
        </div>
        <!-- End .home-slide -->

        <div class="home-slide home-slide2 banner d-flex align-items-center">
            <img class="slide-bg" src="{{ asset('shop/assets/images/demoes/demo3/slider/slide2.jpg') }}"
                style="background-color: #bfcec9" alt="home banner" />
            <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                <h2>New Season Hats</h2>
                <h3 class="text-uppercase rotated-upto-text mb-0">
                    <small>Up to</small>20% off
                </h3>

                <hr class="short-thick-divider mb-sm-0 mb-1" />

                <h5 class="text-uppercase d-inline-block mb-2 mb-sm-0">
                    Starting at <span>$<em>19</em>99</span>
                </h5>
                <a href="demo3-shop.html" class="btn btn-dark btn-xl btn-icon-right" role="button">Shop Now <i
                        class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <!-- End .banner-layer -->
        </div>
        <!-- End .home-slide -->
    </div>
    <section class="container">
        <h2 class="section-title ls-n-15 text-center pt-2 m-b-4">
            Shop By Category
        </h2>

        <div class="owl-carousel owl-theme nav-image-center show-nav-hover nav-outer cats-slider appear-animate"
            data-animation-name="fadeInUpShorter" data-animation-delay="200" data-animation-duration="1000">
            <div class="product-category">
                <a href="demo3-shop.html">
                    <div class="category-content shadow">
                        <h3>Sunglasses</h3>
                        <span><mark class="count">8</mark> products</span>
                    </div>
                </a>
            </div>
            <div class="product-category">
                <a href="demo3-shop.html">
                    <div class="category-content shadow">
                        <h3>Bags</h3>
                        <span><mark class="count">4</mark> products</span>
                    </div>
                </a>
            </div>
            <div class="product-category">
                <a href="demo3-shop.html">
                    <div class="category-content shadow">
                        <h3>Electronics</h3>
                        <span><mark class="count">8</mark> products</span>
                    </div>
                </a>
            </div>
            <div class="product-category">
                <a href="demo3-shop.html">
                    <div class="category-content shadow">
                        <h3>Fashion</h3>
                        <span><mark class="count">11</mark> products</span>
                    </div>
                </a>
            </div>
            <div class="product-category">
                <a href="demo3-shop.html">
                    <div class="category-content shadow">
                        <h3>Headphone</h3>
                        <span><mark class="count">3</mark> products</span>
                    </div>
                </a>
            </div>
            <div class="product-category">
                <a href="demo3-shop.html">
                    <div class="category-content shadow">
                        <h3>Shoes</h3>
                        <span><mark class="count">4</mark> products</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="container pb-3 mb-1">
        <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">
            Popular Products
        </h2>

        <div class="row py-4">
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset('shop/assets/images/demoes/demo3/products/product-1.jpg') }}"
                                width="273" height="273" alt="productr" />
                        </a>

                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Women Shoes</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset('shop/assets/images/demoes/demo3/products/product-2.jpg') }}"
                                width="273" height="273" alt="productr" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="demo3-product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Porto Transparent Images</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset('shop/assets/images/demoes/demo3/products/product-3.jpg') }}"
                                width="273" height="273" alt="productr" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Ideapad</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset('shop/assets/images/demoes/demo3/products/product-4.jpg') }}"
                                width="273" height="273" alt="productr" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="demo3-product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Black Men Shoes</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset('shop/assets/images/demoes/demo3/products/product-5.jpg') }}"
                                width="273" height="273" alt="productr" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Watch</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset('shop/assets/images/demoes/demo3/products/product-6.jpg') }}"
                                width="273" height="273" alt="productr" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Woman Dress</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset("shop/assets/images/demoes/demo3/products/product-7.jpg") }}" width="273"
                                height="273" alt="productr" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="demo3-product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Black Bag</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-3 appear-animate" data-animation-name="fadeIn"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="product-default inner-quickview inner-icon">
                    <figure>
                        <a href="demo3-product.html">
                            <img src="{{ asset("shop/assets/images/demoes/demo3/products/product-8.jpg") }}" width="273"
                                height="273" alt="productr" />
                        </a>
                        <div class="btn-icon-group">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                        </div>
                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                            View</a>
                    </figure>
                    <div class="product-details">
                        <div class="category-wrap">
                            <div class="category-list">
                                <a href="demo3-shop.html" class="product-category">category</a>
                            </div>
                        </div>
                        <h3 class="product-title">
                            <a href="demo3-product.html">Porto Both Sticky Info</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width: 100%"></span><!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="old-price">$59.00</span>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
        </div>

        <hr class="mt-3 mb-6" />

        <div class="row feature-boxes-container pt-2">
            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInRightShorter"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="sicon-earphones-alt"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Customer Support</h3>
                        <h5>Need Assistence?</h5>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum
                            dolor sit amet.
                        </p>
                    </div>
                    <!-- End .feature-box-content -->
                </div>
                <!-- End .feature-box -->
            </div>
            <!-- End .col-lg-3 -->

            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInRightShorter"
                data-animation-delay="100" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="sicon-credit-card"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Secured Payment</h3>
                        <h5>Safe & Fast</h5>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum
                            dolor sit amet.
                        </p>
                    </div>
                    <!-- End .feature-box-content -->
                </div>
                <!-- End .feature-box -->
            </div>
            <!-- End .col-lg-3 -->

            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                data-animation-delay="100" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="sicon-action-undo"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Free Returns</h3>
                        <h5>Easy & Free</h5>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum
                            dolor sit amet.
                        </p>
                    </div>
                    <!-- End .feature-box-content -->
                </div>
                <!-- End .feature-box -->
            </div>
            <!-- End .col-lg-3 -->

            <div class="col-sm-6 col-lg-3 appear-animate" data-animation-name="fadeInLeftShorter"
                data-animation-delay="300" data-animation-duration="1000">
                <div class="feature-box feature-box-simple text-center">
                    <i class="icon-shipping"></i>

                    <div class="feature-box-content p-0">
                        <h3 class="text-uppercase">Free Shipping</h3>
                        <h5>Orders Over $99</h5>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Duis nec vestibulum magna, et dapibus lacus. Lorem ipsum
                            dolor sit amet.
                        </p>
                    </div>
                    <!-- End .feature-box-content -->
                </div>
                <!-- End .feature-box -->
            </div>
            <!-- End .col-lg-3 -->
        </div>
        <!-- End .row .feature-boxes-container-->
    </section>
</x-shop-layout>
