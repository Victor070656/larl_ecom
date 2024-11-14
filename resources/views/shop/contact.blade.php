<x-shop-layout>
    <div class="main contact-two pt-5">
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-0 mt-5">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div id="map"></div><!-- End #map -->

        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <h2 class="ls-n-10 mb-1 pb-2"><strong>Contact Us</strong></h2>

                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group required-field">
                                    <label for="contact-name">Your name</label>
                                    <input type="text" class="form-control" id="contact-name" name="contact-name"
                                        required>
                                </div><!-- End .form-group -->
                            </div>

                            <div class="col-md-6">
                                <div class="form-group required-field">
                                    <label for="contact-email">Your email address</label>
                                    <input type="email" class="form-control" id="contact-email" name="contact-email"
                                        required>
                                </div><!-- End .form-group -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact-subject">Subject</label>
                            <input type="text" class="form-control" id="contact-subject" name="contact-subject">
                        </div><!-- End .form-group -->

                        <div class="form-group mb-0">
                            <label for="contact-message">Your Message</label>
                            <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                        </div><!-- End .form-group -->

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-8 -->

                <div class="col-md-6">
                    <h2 class="contact-title"><strong>Get in touch</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit
                        imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit.</p>

                    <hr class="mt-3 mb-0" />

                    <div class="contact-info mb-2">
                        <h2 class="contact-title"><strong>The Office</strong></h2>

                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="porto-sicon-title">
                                <strong>Address:</strong> 1234 Street Name, City Name, United States
                            </h3>
                        </div>
                        <div class="porto-sicon-box  d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h3 class="porto-sicon-title">
                                <strong>Phone:</strong> (123) 456-7890
                            </h3>
                        </div>
                        <div class="porto-sicon-box  d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <h3 class="porto-sicon-title">
                                <strong>Email:</strong> <a href="https://portotheme.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="8ee3efe7e2ceebf6efe3fee2eba0ede1e3">[email&#160;protected]</a>
                            </h3>
                        </div>
                    </div><!-- End .contact-info -->

                    <hr class="mt-1 mb-0" />

                    <div class="contact-time">
                        <h2 class="contact-title"><strong>Business Hours</strong></h2>

                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <h3 class="porto-sicon-title">Monday - Friday
                                9am to 5pm</h3>
                        </div>

                        <div class="porto-sicon-box  d-flex align-items-center">
                            <div class="porto-icon">
                                <i class="far fa-clock"></i>
                            </div>

                            <h3 class="porto-sicon-title">Saturday - 9am
                                to 2pm</h3>
                        </div>

                        <div class="porto-sicon-box d-flex align-items-center">
                            <div class="porto-icon"><i class="far fa-clock"></i></div>
                            <h3 class="porto-sicon-title">Sunday - Closed
                            </h3>
                        </div>
                    </div>
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div>
</x-shop-layout>
