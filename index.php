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
        <div class="col-md-6 clear grid">
            <figure class="effect-lily">
                <a href="http://www.pizzahut-tt.com/"><img src="<?php bloginfo('template_url'); ?>/img/projects/pizza-hut-tnt.jpg" class="center-block img-responsive" alt="pizza hut website"></a>
                <figcaption>
                    <div>
                        <h2>Nice <span>Lily</span></h2>
                        <p>Lily likes to play with crayons and pencils</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>           
            </figure>
        </div>

        <div class="col-md-6 clear grid">
            <figure class="effect-lily">
                <a href="https://www.grahamtt.azurewebsites.net"><img src="<?php bloginfo('template_url'); ?>/img/projects/graham-trainer-website.jpg" class="center-block img-responsive" alt="graham the trainer website"></a>
                <figcaption>
                    <div>
                        <h2>Nice <span>Lily</span></h2>
                        <p>Lily likes to play with crayons and pencils</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>           
            </figure>
        </div> 
            
        <!-- <a href="http://locationscout.apsolute-tt.com/"><img src="<?php bloginfo('template_url'); ?>/img/projects/location-scout-mobile-app.png" class="center-block img-responsive" alt="location scout website"></a> -->
        
        <div class="col-md-6 clear grid">
            <figure class="effect-lily">
                <a href="http://locationscout.apsolute-tt.com/"><img src="<?php bloginfo('template_url'); ?>/img/projects/location-scout.jpg" class="center-block img-responsive" alt="location scout website"></a>
                <figcaption>
                    <div>
                        <h2>Nice <span>Lily</span></h2>
                        <p>Lily likes to play with crayons and pencils</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>           
            </figure>
        </div> 

        <div class="col-md-6 clear grid">
            <figure class="effect-lily">
                <img src="<?php bloginfo('template_url'); ?>/img/projects/usc-football-team.jpg" class="center-block img-responsive" alt="location scout website">
                <figcaption>
                    <div>
                        <h2>Nice <span>Lily</span></h2>
                        <p>Lily likes to play with crayons and pencils</p>
                    </div>
                    <a href="#">View more</a>
                </figcaption>           
            </figure>
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