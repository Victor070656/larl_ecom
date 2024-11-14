<x-shop-layout>
    <div class="main pt-5">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-9 main-content">
                    <div class="category-banner pt-0 pb-2">
                        <img class="slide-bg" src="assets/images/demoes/demo3/banners/banner-1.jpg" alt="banner"
                            width="1500" height="320">
                        <div class="category-slide-content pt-1">
                            <h2 class="m-b-3">Winter Fashion Trends</h2>
                            <h3 class="text-uppercase ml-0">Up to 30% off on Jackets</h3>

                            <h5 class="text-uppercase d-inline-block mb-1 pb-2">Starting at<span
                                    class="coupon-sale-text font2"><sup>$</sup>199<sup>99</sup></span></h5>
                            <a href="demo3-shop.html" class="btn btn-dark btn-xl ls-0" role="button">Shop Now</a>
                        </div><!-- End .category-slide-content -->
                    </div><!-- End .category-slide -->

                    <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                        <div class="toolbox-left">
                            <a href="#" class="sidebar-toggle">
                                <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <line x1="15" x2="26" y1="9" y2="9" class="cls-1">
                                    </line>
                                    <line x1="6" x2="9" y1="9" y2="9" class="cls-1">
                                    </line>
                                    <line x1="23" x2="26" y1="16" y2="16" class="cls-1">
                                    </line>
                                    <line x1="6" x2="17" y1="16" y2="16" class="cls-1">
                                    </line>
                                    <line x1="17" x2="26" y1="23" y2="23" class="cls-1">
                                    </line>
                                    <line x1="6" x2="11" y1="23" y2="23" class="cls-1">
                                    </line>
                                    <path d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                        class="cls-2"></path>
                                    <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                    <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                    <path
                                        d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                        class="cls-2"></path>
                                </svg>
                                <span>Filter</span>
                            </a>

                            <div class="toolbox-item toolbox-sort">
                                <label>Sort By:</label>

                                <div class="select-custom">
                                    <select name="orderby" class="form-control">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div><!-- End .select-custom -->


                            </div><!-- End .toolbox-item -->
                        </div><!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .toolbox-item -->

                            <div class="toolbox-item layout-modes">
                                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                    <i class="icon-mode-grid"></i>
                                </a>
                                <a href="category-list.html" class="layout-btn btn-list" title="List">
                                    <i class="icon-mode-list"></i>
                                </a>
                            </div><!-- End .layout-modes -->
                        </div><!-- End .toolbox-right -->
                    </nav>

                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-1.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-2.jpg" width="273"
                                            height="273" alt="productr" />
                                        <img src="assets/images/demoes/demo3/products/product-2-2.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="demo3-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-3.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-4.jpg" width="273"
                                            height="273" alt="productr" />
                                        <img src="assets/images/demoes/demo3/products/product-4-2.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo3-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-5.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-6.jpg" width="273"
                                            height="273" alt="productr" />
                                        <img src="assets/images/demoes/demo3/products/product-6-2.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="label-group">
                                        <span class="product-label label-hot">HOT</span>
                                    </div>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-7.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo3-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-8.jpg" width="273"
                                            height="273" alt="productr" />
                                        <img src="assets/images/demoes/demo3/products/product-8-2.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
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
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-9.jpg" width="273"
                                            height="273" alt="productr" />
                                        <img src="assets/images/demoes/demo3/products/product-9-2.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="demo3-product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo3-shop.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo3-product.html">Glasses</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="demo3-product.html">
                                        <img src="assets/images/demoes/demo3/products/product-10.jpg" width="273"
                                            height="273" alt="productr" />
                                    </a>
                                    <div class="btn-icon-group">
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i></a>
                                    </div>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview"
                                        title="Quick View">Quick
                                        View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="demo3-shop.html" class="product-category">category</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">
                                        <a href="demo3-product.html">Black Men Coat</a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                    </div>

                    <nav class="toolbox toolbox-pagination">
                        <div class="toolbox-item toolbox-show">
                            <label>Show:</label>

                            <div class="select-custom">
                                <select name="count" class="form-control">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div><!-- End .select-custom -->
                        </div><!-- End .toolbox-item -->

                        <ul class="pagination toolbox-item">
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link page-link-btn" href="#"><i
                                        class="icon-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End .main-content -->

                <div class="sidebar-overlay"></div>
                <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true"
                                    aria-controls="widget-body-2">Categories</a>
                            </h3>

                            <div class="collapse show" id="widget-body-2">
                                <div class="widget-body">
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#widget-category-1" class="collapsed" data-toggle="collapse"
                                                role="button" aria-expanded="false"
                                                aria-controls="widget-category-1">
                                                Accessories<span class="products-count">(3)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-1">
                                                <ul class="cat-sublist">
                                                    <li>Caps<span class="products-count">(1)</span></li>
                                                    <li>Watches<span class="products-count">(2)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-2" class="collapsed" data-toggle="collapse"
                                                role="button" aria-expanded="false"
                                                aria-controls="widget-category-2">
                                                Electronics<span class="products-count">(4)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-2">
                                                <ul class="cat-sublist">
                                                    <li>Shoes<span class="products-count">(4)</span></li>
                                                    <li>Bag<span class="products-count">(2)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-3" class="collapsed" data-toggle="collapse"
                                                role="button" aria-expanded="false"
                                                aria-controls="widget-category-3">
                                                Fashion<span class="products-count">(2)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-3">
                                                <ul class="cat-sublist">
                                                    <li>Shoes<span class="products-count">(4)</span></li>
                                                    <li>Bag<span class="products-count">(2)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-price">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true"
                                    aria-controls="widget-body-3">Price</a>
                            </h3>

                            <div class="collapse show" id="widget-body-3">
                                <div class="widget-body">
                                    <form action="#">
                                        <div class="price-slider-wrapper">
                                            <div id="price-slider"></div><!-- End #price-slider -->
                                        </div><!-- End .price-slider-wrapper -->

                                        <div
                                            class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="filter-price-text">
                                                Price:
                                                <span id="filter-price-range"></span>
                                            </div><!-- End .filter-price-text -->

                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div><!-- End .filter-price-action -->
                                    </form>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-color">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-6" role="button" aria-expanded="true"
                                    aria-controls="widget-body-6">Color</a>
                            </h3>

                            <div class="collapse show" id="widget-body-6">
                                <div class="widget-body">
                                    <ul class="config-swatch-list flex-column">
                                        <li class="active">
                                            <a href="#" style="background-color: #dda756;"></a>
                                            <span>Brown</span>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #7bbad1;"></a>
                                            <span>Light-Blue</span>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #81d742;"></a>
                                            <span>Green</span>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #6085a5;"></a>
                                            <span>Indego</span>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #333;"></a>
                                            <span>Black</span>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #0188cc;"></a>
                                            <span>Blue</span>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #ab6e6e;"></a>
                                            <span>Red</span>
                                        </li>
                                    </ul>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-size">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true"
                                    aria-controls="widget-body-5">Size</a>
                            </h3>

                            <div class="collapse show" id="widget-body-5">
                                <div class="widget-body">
                                    <ul class="config-size-list">
                                        <li class="active"><a href="#">XL</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">S</a></li>
                                    </ul>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-brand">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-7" role="button" aria-expanded="true"
                                    aria-controls="widget-body-7">Brand</a>
                            </h3>

                            <div class="collapse show" id="widget-body-7">
                                <div class="widget-body pb-0">
                                    <ul class="cat-list">
                                        <li><a href="#">Adidas</a></li>
                                    </ul>
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar-wrapper -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>
</x-shop-layout>
