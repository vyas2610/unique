<!-- Footer Main -->
<footer class="footer-main container-fluid no-padding">
    <div class="footer-widgetblock">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <!-- Widget About -->
                <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget about_widget">
                    <h3 class="widget-title">About our <span> Thar</span></h3>
                    <p>That this group would somehow form a family that's the way we all became the Brady Bunch. Doin' it our way. There's nothing we wont try never heard word.</p>
                </aside><!-- Widget About /- -->

                <!-- Widget Link -->
                <aside class="col-md-2 col-sm-6 col-xs-6 ftr-widget link_widget">
                    <h3 class="widget-title">useful <span> Links</span></h3>
                    @foreach($pages as $slug => $title)
                    <a href="{{ route('web.page.show', $slug) }}" title="{{ $title }}">{{ $title }}</a>
                    @endforeach
                    <!-- <a href="gallery.php" title="Our Gallery">Our Gallery</a> -->
                    <a href="{{ route('web.contact') }}" title="contact-us">Contact Us</a>
                </aside><!-- Widget Link /- -->

                <!-- Widget OpeningHours -->
                <aside class="col-md-4 col-sm-6 col-xs-6 ftr-widget openinghours_widget">
                    <h3 class="widget-title">Opening <span> Hours</span></h3>
                    <p>Monday<span>9:00AM to 6:00PM</span></p>
                    <p>Tuesday<span>9:00AM to 6:00PM</span></p>
                    <p>Wednesday<span>9:00AM to 6:00PM</span></p>
                    <p>Thursday<span>9:00AM to 6:00PM</span></p>
                    <p>Friday<span>9:00AM to 6:00PM</span></p>
                    <p>Saturday<span>9:00AM to 2:00PM</span></p>
                </aside><!-- Widget OpeningHours/- -->

                <!-- Widget PopularDestination -->
                <aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget populardestination_widget">
                    <h3 class="widget-title">Social <span> Link</span></h3>
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" title="GooglePlus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </aside><!-- Widget PopularDestination /- -->
            </div>
        </div><!-- Container /- -->
    </div><!-- Footer WidgetBlock /- -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <span>&copy; {{ date('Y') }} All Rights Reserved</span>
                </div>
            </div>
        </div>
    </div><!-- Footer Bottom /- -->
</footer><!-- Footer /- -->