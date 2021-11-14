<!-- Contact US -->
<section id="contactus" class="padding_top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
                    <span>Lets Get In Touch</span>
                    <h2 class="darkcolor">Contact {{ $siteConfig->siteName }}</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                <p>{{ $siteConfig->siteDescription }}</p>
                <div class="row">
                    <div class="col-md-6 col-sm-6 our-address top40">
                        <h5 class="bottom25">Our Address</h5>
                        <p class="bottom15">{{ $siteConfig->alamat }}</p>
                    </div>
                    <div class="col-md-6 col-sm-6 our-address top40">
                        <h5 class="bottom25">Our Phone</h5>
                        <p class="bottom15">Telephone Number : 0{{ $siteConfig->telponSatu }} <span class="block">
                                @if($siteConfig->telponDua)
                                    Telephone Number : 0{{ $siteConfig->telponDua }}
                                @endif
                  </span> </p>
                    </div>
                    <div class="col-md-6 col-sm-6 our-address top40">
                        <h5 class="bottom25">Our Email</h5>
                        <p class="bottom15">Main Email : {{ $siteConfig->email }}  </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 margin_bottom">
                <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                    <div class="row">

                        <div class="col-sm-12" id="result"></div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="text" placeholder="First Name:" required id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="text" placeholder="Last Name:" required id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group bottom35">
                                <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="button btnprimary" id="submit_btn">submit request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Location Map here-->
    <div id="map-container"></div>
</section>
<!--Contact US Ends-->

<!--Site Footer Here-->
<footer id="site-footer" class="padding_half">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <ul class="social-icons bottom25 wow fadeInUp" data-wow-delay="300ms">
                    @if($siteConfig->facebook)
                        <li><a href="{{ $siteConfig->facebook }}"><i class="fa fa-facebook"></i> </a> </li>
                    @endif
                    @if($siteConfig->youtube)
                        <li><a href="{{ $siteConfig->youtube }}"><i class="fa fa-youtube"></i> </a> </li>
                    @endif
                    @if($siteConfig->instagram)
                        <li><a href="{{ $siteConfig->instagram }}"><i class="fa fa-linkedin"></i> </a> </li>
                    @endif
                </ul>
                <p class="copyrights wow fadeInUp" data-wow-delay="350ms"> &copy; 2021 {{ $siteConfig->siteName }}</p>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
