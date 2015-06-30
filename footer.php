  





<!-- Start Footer Section -->

<footer>

    <div class="container">

        <div class="row footer-widgets">





            <!-- Start Contact Widget -->

            <div class="col-md-4 col-xs-12">

                <div class="footer-widget contact-widget">

                    <h4><img src="images/logo.png" class="img-responsive" alt="Footer Logo" /></h4>

                    <p><?php $Contact = htmlspecialchars_decode($info->about_ar);

                    echo mb_substr(strip_tags($Contact), 0,120 , 'utf-8'); 

                    ?></p>

                    <ul>

                        <li><span>Phone Number:</span> <?php echo $info->phone; ?></li>

                        <li><span>Email:</span> <?php echo $info->email; ?></li>

                        <li><span>Website:</span> <?php echo "www.".$_SERVER['SERVER_NAME'].".com"; ?></li>

                    </ul>

                </div>

            </div><!-- .col-md-3 -->

            <!-- End Contact Widget -->













            <!-- Start Flickr Widget -->

            <div class="col-md-4 col-xs-12">

                <div class="footer-widget flickr-widget">

                    <h4 class="text-right">Flicker Feed<span class="head-line"></span></h4>

                    <ul class="flickr-list">

                        <li>

                            <a href="images/flickr-01.jpg" class="lightbox">

                                <img alt="" src="images/flickr-01.jpg">

                            </a>

                        </li>

                        <li>

                            <a href="images/flickr-02.jpg" class="lightbox">

                                <img alt="" src="images/flickr-02.jpg">

                            </a>

                        </li>

                        <li>

                            <a href="images/flickr-03.jpg" class="lightbox">

                                <img alt="" src="images/flickr-03.jpg">

                            </a>

                        </li>

                        <li>

                            <a href="images/flickr-04.jpg" class="lightbox">

                                <img alt="" src="images/flickr-04.jpg">

                            </a>

                        </li>



                    </ul>

                </div>

            </div><!-- .col-md-3 -->

            <!-- End Flickr Widget -->

            <!-- Start Subscribe & Social Links Widget -->

            <div dir="rtl" class="col-md-4 col-xs-12">



                <div class="footer-widget social-widget">

                    <h4 class="text-right">Follow Us<span class="head-line"></span></h4>

                    <ul class="social-icons">

                        <li>

                            <a class="facebook" target="_blank" href="<?php echo $info->facebook; ?>"><i class="fa fa-facebook"></i></a>

                        </li>

                        <li>

                            <a class="twitter" target="_blank" href="<?php echo $info->twitter; ?>"><i class="fa fa-twitter"></i></a>

                        </li>

                        <li>

                            <a class="google" target="_blank" href="<?php echo $info->google; ?>"><i class="fa fa-google-plus"></i></a>

                        </li>





                    </ul>

                </div>

            </div><!-- .col-md-3 -->

            <!-- End Subscribe & Social Links Widget -->











        </div><!-- .row -->



        <!-- Start Copyright -->

        <div class="copyright-section">

            <div class="row">

                       <!--  <div class="col-md-6">

                            <p>&copy; 2014 Margo -  All Rights Reserved <a href="http://graygrids.com">GrayGrids</a> </p>

                        </div> -->

                        <!-- .col-md-6 -->

                        <div class="col-md-6">

                            <ul class="footer-nav">



                                <li><a href="about.php">about</a>

                                </li>

                                <li><a href="contact.php">Contact</a>

                                </li>

                            </ul>

                        </div><!-- .col-md-6 -->



                        <div class="col-md-6">

                            <p><span>Developed by</span> <a href="http://experts10.com">Experts</a></p>

                        </div>

                    </div><!-- .row -->

                    <div class="row">
                        <p class="text-center">
                            حقوق الطبع محفوظة لمكتب ايسترن جروب 2013
                        </p>
                    </div>

                </div>

                <!-- End Copyright -->



            </div>

        </footer>

        <!-- End Footer Section -->

        

        

    </div>

    <!-- End Full Body Container -->



    <!-- Go To Top Link -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>



    <div id="loader">

        <div class="spinner">

            <div class="dot1"></div>

            <div class="dot2"></div>

        </div>

    </div>







    <script type="text/javascript" src="en/js/jquery-2.1.1.min.js"></script>

    <script type="text/javascript" src="en/js/jquery.migrate.js"></script>

    <script type="text/javascript" src="en/js/modernizrr.js"></script>

    <script type="text/javascript" src="en/asset/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="en/js/owl.carousel.min.js"></script>

    <script type="text/javascript" src="en/js/nivo-lightbox.min.js"></script>

    <script type="text/javascript" src="en/js/jquery.appear.js"></script>

    <script type="text/javascript" src="en/js/jquery.isotope.min.js"></script>

    <script type="text/javascript" src="en/js/jquery.textillate.js"></script>



    <script type="text/javascript" src="en/js/jquery.nicescroll.min.js"></script>

    <script type="text/javascript" src="en/js/jquery.parallax.js"></script>

    <script type="text/javascript" src="en/js/script.js"></script>

</body>



</html>