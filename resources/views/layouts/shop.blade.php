<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 19:19:55 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('shop/assets/images/icons/favicon.png') }}">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('shop/assets/css/bootstrap.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('shop/assets/css/demo3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('shop/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('shop/assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
</head>

<body class="full-screen-slider">
    <div class="page-wrapper">
        <header class="header header-transparent">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>

                        <a href="demo3.html" class="logo">
                            <img src="{{ asset('shop/assets/images/logo-black.png') }}" alt="Porto Logo">
                        </a>

                        <nav class="main-nav font2">
                            <ul class="menu">
                                <li class="active">
                                    <a href="{{ route("home") }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route("about") }}">About</a>
                                </li>
                                <li>
                                    <a href="{{ route("market") }}">Shop</a>
                                </li>
                                <li>
                                    <a href="{{ route("contact") }}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="I'm searching for..." required="">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <button class="btn text-dark icon-magnifier" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div>

                        <a href="login.html" class="header-icon header-icon-user" title="Login"><i
                                class="icon-user-2"></i></a>

                        <a href="wishlist.html" class="header-icon header-icon-wishlist" title="Wishlist"><i
                                class="icon-wishlist-2"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-cart-thick"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo3-product.html">Ultimate 3D Bluetooth Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo3-product.html" class="product-image">
                                                    <img src="assets/images/products/product-1.jpg" alt="product"
                                                        width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove"
                                                    title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo3-product.html">Brown Women Casual HandBag</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo3-product.html" class="product-image">
                                                    <img src="assets/images/products/product-2.jpg" alt="product"
                                                        width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove"
                                                    title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo3-product.html">Circled Ultimate 3D Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo3-product.html" class="product-image">
                                                    <img src="assets/images/products/product-3.jpg" alt="product"
                                                        width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove"
                                                    title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            {{ $slot }}
        </main><!-- End .main -->

        <footer class="footer">
            <div class="container">
                <div class="footer-top top-border d-flex align-items-center justify-content-between flex-wrap">
                    <div class="footer-left widget-newsletter d-md-flex align-items-center">
                        <div class="widget-newsletter-info">
                            <h5 class="widget-newsletter-title text-uppercase m-b-1">subscribe newsletter</h5>
                            <p class="widget-newsletter-content mb-0">Get all the latest information on Events, Sales
                                and Offers.</p>
                        </div>
                        <form action="#">
                            <div class="footer-submit-wrapper d-flex">
                                <input type="email" class="form-control" placeholder="Email address..."
                                    size="40" required>
                                <button type="submit" class="btn btn-dark btn-sm">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-right">
                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram"
                                target="_blank"></a>
                        </div><!-- End .social-icons -->
                    </div>
                </div>

                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">Contact Info</h4>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-widget">
                                            <h4 class="widget-title">ADDRESS:</h4>
                                            <a href="#">1234 Street Name, City, England</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 pl-xl-0">
                                        <div class="contact-widget">
                                            <h4 class="widget-title">PHONE:</h4>
                                            <a href="#">(123) 456-7890</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="contact-widget email">
                                            <h4 class="widget-title">EMAIL:</h4>
                                            <a
                                                href="https://portotheme.com/cdn-cgi/l/email-protection#fa979b9396ba9f829b978a969fd4999597"><span
                                                    class="__cf_email__"
                                                    data-cfemail="d2bfb3bbbe92b7aab3bfa2beb7fcb1bdbf">[email&#160;protected]</span></a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 pl-xl-0">
                                        <div class="contact-widget">
                                            <h4 class="widget-title">WORKING DAYS/HOURS:</h4>
                                            <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <div class="links link-parts row">
                                    <ul class="link-part col-xl-4 mb-0">
                                        <li><a href="demo3-about.html">About Us</a></li>
                                        <li><a href="demo3-contact.html">Contact Us</a></li>
                                        <li><a href="dashboard.html">My Account</a></li>
                                    </ul>
                                    <ul class="link-part col-xl-8">
                                        <li class="pl-xl-2 ml-xl-1"><a href="#">Orders History</a></li>
                                        <li class="pl-xl-2 ml-xl-1"><a href="#">Advanced Search</a></li>
                                    </ul>
                                </div>
                            </div><!-- End .widget -->
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-4">
                            <div class="widget">
                                <h4 class="widget-title">Main Features</h4>
                                <div class="links link-parts row">
                                    <ul class="link-part col-xl-6 mb-0">
                                        <li><a href="#">Super Fast HTML Template</a></li>
                                        <li><a href="#">1st Fully working Ajax Theme</a></li>
                                        <li><a href="#">33 Unique Shop Layouts</a></li>
                                    </ul>
                                    <ul class="link-part col-xl-6 pl-xl-2">
                                        <li><a href="#">Powerful Admin Panel</a></li>
                                        <li><a href="#">Mobile &amp; Retina Optimized</a></li>
                                    </ul>
                                </div>
                            </div><!-- End .widget -->
                        </div>
                    </div>
                </div>

                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">Porto eCommerce. © 2021. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons mr-0">
                            <span class="payment-icon visa"
                                style="background-image: url(assets/images/payments/payment-visa.svg)"></span>
                            <span class="payment-icon paypal"
                                style="background-image: url(assets/images/payments/payment-paypal.svg)"></span>
                            <span class="payment-icon stripe"
                                style="background-image: url(assets/images/payments/payment-stripe.png)"></span>
                            <span class="payment-icon verisign"
                                style="background-image:  url(assets/images/payments/payment-verisign.svg)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- End .page-wrapper -->

    {{-- <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> --}}

    {{-- <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay --> --}}

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="/">Home</a></li>
                    <li>
                        <a href="#">About</a>

                    </li>
                    <li>
                        <a href="#">Shop</a>

                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>

                    <li><a href="login.html">My Account</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">Log In</a></li>
                    @endguest
                </ul>
            </nav><!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    {{-- <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo3.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo3-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div> --}}



    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('shop/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('shop/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('shop/assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('shop/assets/js/jquery.appear.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('shop/assets/js/main.min.js') }}"></script>
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 19:20:32 GMT -->

</html>
