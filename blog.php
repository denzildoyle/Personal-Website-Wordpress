<?php // Template Name: Blog ?>

<?php get_header(); ?>
<style>
	.bg-header-blog{
		background: red;
		width: 100%;
		height: 100%;
	}
</style>
<div class="col-md-9">

	<div class="bg-header-blog">
		<h1><?php echo get_the_title(); ?></h1>
	</div>
    
</div>

    
<!-- 	<div class="content-area container ">
		<div class="col-md-12 page">
		<?php
		    $args = array('post_type' => 'post');
		    $post_query = new WP_Query($args);

			if($post_query->have_posts() ) {
			  	while($post_query->have_posts() ) {
				    $post_query->the_post();
				    
				    echo "<h2>". the_title() ."</h2>";
				    echo "<p>". the_excerpt() ."</p>";
				}
			}
		?>
		</div>
	</div> -->

        <!-- JavaScript plugins comes here -->
        <script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!--[if lt IE 7 ]>
            <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
            <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->
        
        <?php wp_footer(); // js scripts are inserted using this function ?>
    </body>
</html>
