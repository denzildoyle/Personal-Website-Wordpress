<?php get_header(); ?>
    <header class="main-page">
        <div class="layer">
            <div class="col-md-10 col-md-offset-1 bio">
                <div class="col-md-8">
                    <div>
                        <h6><em>Designer &amp; Developer</em></h6>
                        <h2>Denzil Doyle</h2>
                    </div>
                    <div id="about-me" class="details">
                        <h1><em>UI/UX Designer &amp; Developer</em></h1>
                        <p class="desktop">I create handcrafted user-centered experiences for both web and mobile. I am also a Autodidact // Polymath // Problem Solver // Web and Mobile UI/UX Designer - <em><a href="http://bohemiancoding.com/sketch/">Sketch</a></em> // Front-End Developer // Podcast Addict // Mad Scientist and Occasional comedian. Get sense of my accedemic and real word experence on <em><a href="https://www.linkedin/in/denzildoyle.com">Linkedin.</a></em></p>
                        <p class="mobile">I create handcrafted user-centered experiences for both web and mobile. Get sense of my accedemic and real word experence on <em><a href="https://www.linkedin/in/denzildoyle.com">Linkedin.</a></em></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="section">
        <div class="col-md-10 col-md-offset-1 left-heading">
            <div class="col-md-4">
                <h2 class="heading">Work</h2>
                <p class="sub-heading">Some of the work I have done both personally and professionally</p>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1 project-row">
            <div class="col-md-6">
                <a href="http://www.pizzahut-tt.com/">
                    <img src="<?php bloginfo('template_url'); ?>/img/projects/pizza-hut-tnt.jpg" class="center-block img-responsive" alt="pizza hut website">
                </a>
                <h2>Pizza Hut</h2>
                <p>Impliment website redesign, while at <em>Caribbean Ideas</em> // Designed by <em>Trevyn R</em></p>
            </div>

            <div class="col-md-6">
                <a href="grahamtt.azurewebsites.net">
                    <img src="<?php bloginfo('template_url'); ?>/img/projects/graham-trainer-website.jpg" class="center-block img-responsive" alt="graham the trainer website">
                </a>
                <h2>Graham the Trainer</h2>
                <p>Impliment website design by <em>Trevyn R</em></p>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1 project-row">
            <div class="col-md-6">
                <a href="http://locationscout.apsolute-tt.com/">
                    <img src="<?php bloginfo('template_url'); ?>/img/projects/location-scout.jpg" class="center-block img-responsive" alt="location scout website">
                </a>
                <h2>Location Scout</h2>
                <p>Windows phone 8 application design &amp; development</p>
            </div>

            <div class="col-md-6">
                <a href="https://www.behance.net/gallery/6045315/Lawson-Blacks-Foundation-Logo">
                    <img src="<?php bloginfo('template_url'); ?>/img/projects/usc-football-team.jpg" class="center-block img-responsive">
                </a>
                <h2>USC Football</h2>
                <p>USC football team branding</p>
            </div>
        </div>
    </div>


    <div class="row clear gray">
        <div class="tweet-container container" ng-app="myApp" ng-controller="FeedCtrl">
            <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 tweet">
                <hr>
                <p>{{tweet}}</p>
                <a href="https://twitter.com/DenzilDoyle" class="small">Follow me on Twitter</a>
                <hr>
            </div>
        </div>
    </div>

    <div class="row clear">
        <div class="col-md-12 section">
            <h2 class="heading text-center">Instagram</h2>
            <p class="sub-heading text-center">Follow me on Instagram @denzildoyle</p>
            <div id="instafeed"></div>
        </div>
    </div>

<?php get_footer(); ?>