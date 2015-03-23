<?php get_header(); ?>
    <header class="main-page">
        <div class="layer">
            <div class="container bio">
                <div class="col-md-8">
                    <div>
                        <h6><em>Designer &amp; Developer</em></h6>
                        <h2>Denzil Doyle</h2>
                    </div>
                    <div id="about-me" class="details">
                        <h1><em>UI/UX Designer, Developer</em></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate incidunt doloribus repellat quaerat nemo suscipit officia temporibus, molestiae nihil nisi sint tempore corporis optio provident? Qui natus facilis quas hic.</p>
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
    </div>

    <div class="row clear">
        <a class="col-md-6 clear grid" href="http://www.pizzahut-tt.com/">
            <figure class="effect-lily">
                <img src="<?php bloginfo('template_url'); ?>/img/projects/pizza-hut-tnt.jpg" class="center-block img-responsive" alt="pizza hut website">
                <figcaption>
                    <div>
                        <h2>Pizza Hut</h2>
                        <p>Impliment website redesign, while at <em>Caribbean Ideas</em> // Designed by <em>Trevyn R</em></p>
                    </div>
                </figcaption>
            </figure>
        </a>

        <a class="col-md-6 clear grid" href="https://www.grahamtt.azurewebsites.net">
            <figure class="effect-lily">
                <img src="<?php bloginfo('template_url'); ?>/img/projects/graham-trainer-website.jpg" class="center-block img-responsive" alt="graham the trainer website">
                <figcaption>
                    <div>
                        <h2>Graham the Trainer</h2>
                        <p>Impliment website design by <em>Trevyn R</em></p>
                    </div>
                </figcaption>
            </figure>
        </a>

        <!-- <a href="http://locationscout.apsolute-tt.com/"><img src="<?php bloginfo('template_url'); ?>/img/projects/location-scout-mobile-app.png" class="center-block img-responsive" alt="location scout website"></a> -->

        <a class="col-md-6 clear grid" href="http://locationscout.apsolute-tt.com/">
            <figure class="effect-lily">
                <img src="<?php bloginfo('template_url'); ?>/img/projects/location-scout.jpg" class="center-block img-responsive" alt="location scout website">
                <figcaption>
                    <div>
                        <h2>Location Scout</h2>
                        <p>Windows phone 8 application designed &amp; developed</p>
                    </div>
                </figcaption>
            </figure>
        </a>

        <a class="col-md-6 clear grid" href="https://www.behance.net/gallery/6045315/Lawson-Blacks-Foundation-Logo">
            <figure class="effect-lily">
                <img src="<?php bloginfo('template_url'); ?>/img/projects/usc-football-team.jpg" class="center-block img-responsive">
                <figcaption>
                    <div>
                        <h2>USC Football</h2>
                        <p>USC football team branding</p>
                    </div>
                </figcaption>
            </figure>
        </a>
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