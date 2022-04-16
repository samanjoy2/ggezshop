<footer class="footer-area fruits-footer">
    <div class="food-footer-bottom pt-10 pb-5 black-bg-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget">
                        <div class="food-about">
                            <p>GGEZ Online Store</p>
                            <div class="food-about-info">
                                <div class="food-info-wrapper">
                                    <div class="food-address">
                                        <div class="food-info-icon">
                                            <i class="pe-7s-map-marker"></i>
                                        </div>
                                        <div class="food-info-content">
                                            <p>www.ggezshop.com</p>
                                        </div>
                                    </div>
                                    <div class="food-address">
                                        <div class="food-info-icon">
                                            <i class="pe-7s-call"></i>
                                        </div>
                                        <div class="food-info-content">
                                            <p>+880-188888888</p>
                                        </div>
                                    </div>
                                    <div class="food-address">
                                        <div class="food-info-icon">
                                            <i class="pe-7s-chat"></i>
                                        </div>
                                        <div class="food-info-content">
                                            <p>
                                                <a href="samanjoy2@gmail.com">samanjoy2@gmail.com</a> <br>
                                                <a href="admin@admin.com" target="_blank">admin@admin.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget mt-50">
                        <h3 class="footer-widget-title-6">Options</h3>
                        <div class="food-widget-content">
                            <ul>
                                <li><a href="{{ route('cart.index') }}"><img
                                            src="{{ asset('frontend/img/icon-img/41.png') }}" alt="hhhhhh"> Cart</a></li>
                                <li>
                                    <a href="{{ route('user.dashboard') }}"><img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        My Account</a>
                                </li>
                                @guest
                                    @if (route('register'))
                                        <li>
                                            <a href="{{ route('register') }}">
                                                <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                                Register
                                            </a>
                                        </li>
                                    @endif
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-widget mt-50">
                        <h3 class="footer-widget-title-6">Information</h3>
                        <div class="food-widget-content">
                            <ul>
                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('page.show', 'privacy-policy') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle black-bg-2 pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer-services-wrapper mb-30">
                        <div class="footer-services-icon">
                            <i class="pe-7s-car"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Fast Delivery</h3>
                            <p>Get Fast Delivery of your Products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-services-wrapper mb-30">
                        <div class="footer-services-icon">
                            <i class="pe-7s-shield"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Money Guarentee</h3>
                            <p>Secured and Safe money Transactions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-services-wrapper mb-30">
                        <div class="footer-services-icon">
                            <i class="pe-7s-headphones"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Online Support</h3>
                            <p>24/7 Online Support.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <img src="{{ asset('frontend/img/icon-img/3.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="food-copyright black-bg-6 ptb-30">
        <div class="container text-center">
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                Created by
                <a href="ggezshop.test" target="_blank" class="text-primary">ggezshop.test</a>
            </p>
        </div>
    </div>
</footer>


