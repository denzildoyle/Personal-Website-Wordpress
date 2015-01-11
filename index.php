<?php get_header(); ?>
    <header class="main-page">
        <div class="layer">
            <div class="container">
                <div class="col-xs-12">
                    <a href="#"><img class="logo img-circle" src="<?php bloginfo('template_url'); ?>/img/logo.jpg"></a>
                </div>
            </div>
            <div class="container bio">
                <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1"  id="about-me">
                    <p>Hello, I’m <b>Denzil Doyle</b> I create handcrafted user centered experiences for both web and mobile.</p>
                </div>
                <div class="col-md-12 skills" id="skills">
                    <div class="col-xs-4 clear">
                        <img src="<?php bloginfo('template_url'); ?>/img/web.svg" class="center-block img-responsive">
                        <h4>Web Development</h4>
                    </div>
                    <div class="col-xs-4 clear">
                        <img src="<?php bloginfo('template_url'); ?>/img/mobile.svg" class="center-block img-responsive">
                        <h4>Mobile Development</h4>
                    </div>
                    <div class="col-xs-4 clear">
                        <img src="<?php bloginfo('template_url'); ?>/img/ui.svg" class="center-block img-responsive">
                        <h4>UI Design</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content-area" id="work">
        <div class="container heading">
            <div class="col-md-4 col-md-offset-4">
                <h1>Work</h1>
                <p>Some of the work I have done both personally and professionally</p>
            </div> 
        </div>

        <div class="container-fluid project">
            <div class="col-md-8 col-md-offset-2">
                <a href="http://www.pizzahut-tt.com/" id="ga-img-pizza-hut"><img src="<?php bloginfo('template_url'); ?>/img/projects/pizza-hut-tnt.jpg" class="center-block img-responsive" alt="pizza hut website"></a>
            </div>
        </div>
        <div class="social-section">
            <div class="col-md-8 col-md-offset-2">
                <div class="description">
                <p><b>Pizza Hut</b><br>
                website redesign and development</p>
                <p class="share-btns">
                    <a href="https://twitter.com/share" data-related="denzildoyle: Web Developer" data-text="Entrepreneur, web designer/developer. Founder/CTO of @apsolute_tt Linkedin: goo.gl/5GBu7O" data-url="http://www.denzildoyle.me/" data-via="denzildoyle" class="twitter-share-button center-block" data-lang="en">Tweet</a>
                    <div class="fb-share-button" data-href="http://www.denzildoyle.me/" data-type="button_count"></div>
                </p>                
                </div>
            </div>
        </div>

        <div class="container-fluid project">
            <div class="col-md-8 col-md-offset-2">
                <a href="https://www.grahamtt.azurewebsites.net" id="ga-img-graham-the-trainer"><img src="<?php bloginfo('template_url'); ?>/img/projects/graham-trainer-website.jpg" class="center-block img-responsive" alt="graham the trainer website"></a>
            </div>              
        </div>
        <div class="social-section">
            <div class="col-md-8 col-md-offset-2">
                <div class="description">
                <p><b>Graham The Trainer</b><br>
                website design and development</p>
                <p class="share-btns">
                    <a href="https://twitter.com/share" data-related="denzildoyle: Web Developer" data-text="Entrepreneur, web designer/developer. Founder/CTO of @apsolute_tt Linkedin: goo.gl/5GBu7O" data-url="http://www.denzildoyle.me/" data-via="denzildoyle" class="twitter-share-button center-block" data-lang="en">Tweet</a>
                    <div class="fb-share-button" data-href="http://www.denzildoyle.me/" data-type="button_count"></div>
                </p>                
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid project">
            <div class="col-md-8 col-md-offset-2">
                <a href="http://locationscout.apsolute-tt.com/" id="ga-img-locationscout"><img src="<?php bloginfo('template_url'); ?>/img/projects/location-scout.jpg" class="center-block img-responsive" alt="location scout website"></a>
            </div>              
        </div>
        <div class="social-section">
            <div class="col-md-8 col-md-offset-2">
                <div class="description">
                <p><b>Location Scout</b><br>
                website design and development</p>
                <p class="share-btns">
                    <a href="https://twitter.com/share" data-related="denzildoyle: Web Developer" data-text="Entrepreneur, web designer/developer. Founder/CTO of @apsolute_tt Linkedin: goo.gl/5GBu7O" data-url="http://www.denzildoyle.me/" data-via="denzildoyle" class="twitter-share-button center-block" data-lang="en">Tweet</a>
                    <div class="fb-share-button" data-href="http://www.denzildoyle.me/" data-type="button_count"></div>
                </p>                
                </div>
            </div>
        </div>
    </div>

    <div class="tweet-container container" ng-app="myApp" ng-controller="FeedCtrl">
        <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 tweet">   
            <hr>
            <p>{{tweet}}</p>
            <a href="https://twitter.com/DenzilDoyle" class="small">Follow me on Twitter</a>
            <hr>
        </div>   
    </div>

    <div class="row clear">
        <div class="col-md-12 clear">
            <div id="instafeed"></div>
        </div>
    </div>

<?php get_footer(); ?>