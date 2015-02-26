<?php // Template Name: Blog ?>

<?php get_header(); ?>
    <header class="sub-page">
		<div class="title">
    		<div class="container">
    			<div class="col-md-8 col-md-offset-2 col-xs-12">
			        <h1><?php echo get_the_title(); ?></h1>
		    	</div>
    		</div>
    	</div>
    </header>
    
	<div class="content-area container ">
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
	</div>
<?php get_footer(); ?>
