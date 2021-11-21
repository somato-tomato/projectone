<!-- Contact US -->
<section id="contactus" class="padding_top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
{{--                    <span>Lets Get In Touch</span>--}}
                    <h2 class="darkcolor">Contact Eleva.id</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                <p style="text-align: justify">{{ $siteConfig->siteDescription }}</p>
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
                <form method="post" class="getin_form wow fadeInUp" data-wow-delay="400ms" action="{{url('feedrequests')}}">
                    @csrf
                    <div class="row">

                        <div class="col-sm-12" id="result"></div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="text" placeholder="First Name:" required id="first_name" name="first">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group bottom35">
                                <input class="form-control" type="text" placeholder="Last Name:" required id="last_name" name="last">
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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.306952197492!2d106.84752771471683!3d-6.22319659549515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38ee5d21441%3A0x44b3ece8d15487ea!2sRT.6%2FRW.2%2C%20South%20Manggarai%2C%20Tebet%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1636822551297!5m2!1sen!2sid"width="800" height="600"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                        <li><a href="mailto:eleva.elevator@gmail.com"><i class="fa fa-envelope-o"></i> </a> </li>
                </ul>
                <p class="copyrights wow fadeInUp" data-wow-delay="350ms"> &copy; 2021 {{ $siteConfig->siteName }}</p>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
