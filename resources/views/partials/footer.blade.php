<footer>

    <div class="footer_top">
        <div class="container">
            <div class="row h-100">
                <div class="col h-100 ">
                    <div class="content_links">
                        <ul class="row">
                            @foreach ($linkFooter as $item)
                                <li class="col py-5 d-flex justify-content-center">
                                    <a href="#nogo" class="d-flex h-100 align-items-center">
                                        <div>
                                            <img src="{{ Vite::asset($item['src']) }}" alt="">
                                            <!--target="_blank"-->

                                        </div>
                                        <div>
                                            <span>{{ $item['title'] }}</span>

                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer_center multi-bg">
        <div class="container">
            <div class="row center_content">
                <div class="col">
                    <div class="row">
                        <div class="col col-md-6 center_content-links">
                            <div class="content_links-left">
                                <h3>
                                    dc comics
                                </h3>
                                <ul>
                                    <li>
                                        <a href="#nogo">
                                            Characters
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Comics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Movies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            TV
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Games
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Videos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            News
                                        </a>
                                    </li>
                                </ul>
                                <h3>
                                    shop
                                </h3>
                                <ul>
                                    <li>
                                        <a href="#nogo">
                                            Shop DC
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Shop DC Collectibles
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content_links-center">
                                <h3>
                                    dc
                                </h3>
                                <ul>
                                    <li>
                                        <a href="#nogo">
                                            Terms Of Use
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Privacy policy (New)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Ad Choices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Advertising
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Jobs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Subscriptions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Talent Workshops
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            CPSC Certificates
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Ratings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Shop Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content_links-right">
                                <h3>
                                    sites
                                </h3>
                                <ul>
                                    <li>
                                        <a href="#nogo">
                                            DC
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            MAD Magazine
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            DC Kids
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            DC Universe
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#nogo">
                                            DC Power Visa
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="center_content-logo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-6 center_content-terms">
                            <p>
                                All Site Content TM and & 2020 DC Entertainment, unless otherwise <a
                                    href="#nogo">noted here</a>. All rights reserved.
                                <a href="#nogo">Cookies Settings</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container h-100">
            <div class="bottom_content">
                <div class="bottom_content-start">
                    <button>sign-up now!</button>
                </div>
                <div class="bottom_content-end">

                    <ul>
                        <li>
                            <span>follow us</span>
                        </li>
                        <li>
                            <a href="#nogo">
                                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}">
                            </a>
                        </li>
                        <li>
                            <a href="#nogo">
                                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}">
                            </a>
                        </li>
                        <li>
                            <a href="#nogo">
                                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}">
                            </a>
                        </li>
                        <li>
                            <a href="#nogo">
                                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}">
                            </a>
                        </li>
                        <li>
                            <a href="#nogo">
                                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}">
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

</footer>
