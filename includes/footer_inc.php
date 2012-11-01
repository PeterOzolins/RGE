                    <div id="footer">
                        <div>
                            <h4>
                                About Real Genius
                            </h4>
                            <p>
                                The performers<br>
                                What We Do<br>
                                Shout-Outs<br>
                                Contact Us
                            </p>
                        </div>
                        <div>
                            <h4>
                                Events
                            </h4>
                            <p>
                                Mitzvahs<br>
                                Weddings<br>
                                Corporate<br>
                                Birthdays<br>
                                Schools<br>
                                Wrap Parties
                            </p>
                        </div>
                        <div>
                            <h4>
                                Pre Party
                            </h4>
                            <p>
                                Airbrush & Glitter Tatoos<br>
                                Airbrush Shirts & Hats<br>
                                Game Stations<br>
                                GreenScreen Photos<br>
                                Photobooths<br>
                                Giveaways<br>
                                Montage Projection<br>
                                LED Lighting
                            </p>
                        </div>
                        <div>
                            <h4 class="contact">
                                Get In Touch!<br>
                                1-800-555-9999
                            </h4>
                            <p class="red">
                                Office Hours<br>
                                Mon - Fri 10am - Late
                            </p>
                            <ul class="socialIcons">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                    </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- SuperFish Menu -->
        <script type="text/javascript" src="/js/hoverIntent.js"></script>
        <script type="text/javascript" src="/js/superfish.js"></script>
        <script type="text/javascript" src="/js/supersubs.js"></script>
        
        <script type="text/javascript">
            // initialise plugins
            jQuery(function(){
                jQuery('ul.sf-menu').superfish();
            });
        </script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
        <!-- 
        ##########################################
        #######      Slideshow Scripty         ### 
        #######                                ###
        ##########################################-->
        <script src="js/slides.min.jquery.js"></script>
        <script>
            $(function(){
                $('#slides').slides({
                    preload: true,
                    preloadImage: 'img/loading.gif',
                    play: 5000,
                    pause: 2500,
                    hoverPause: true,
                    animationStart: function(current){
                        $('.caption').animate({
                            bottom:-35
                        },100);
                        if (window.console && console.log) {
                            // example return of current slide number
                            console.log('animationStart on slide: ', current);
                        };
                    },
                    animationComplete: function(current){
                        $('.caption').animate({
                            bottom:0
                        },200);
                        if (window.console && console.log) {
                            // example return of current slide number
                            console.log('animationComplete on slide: ', current);
                        };
                    },
                    slidesLoaded: function() {
                        $('.caption').animate({
                            bottom:0
                        },200);
                    }
                });
            });
        </script><!-- ## end slideshow ## -->
