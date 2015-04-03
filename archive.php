<?php get_header(); ?>
	<header class="single-page" style="background-image: url('')">
		<div class="layer">
			<div class="title">
	    		<div class="container">
	    			<div class="col-md-12">
	    				<?php if (is_category()) { ?>
							<h1><?php _e("Category: ", "wpbootstrap"); ?><?php single_cat_title(); ?></h1>
						<?php } elseif (is_tag()) { ?>
							<h1><?php _e("Tag: ", "wpbootstrap"); ?><?php single_tag_title(); ?></h1>
						<?php } elseif (is_author()) { ?>
							<h1><?php _e("Posts By: ", "wpbootstrap"); ?><?php get_the_author_meta('display_name'); ?></h1>
						<?php } elseif (is_day()) { ?>
							<h1><?php _e("Daily Archives: ", "wpbootstrap"); ?><?php the_time('l, F j, Y'); ?></h1>
						<?php } elseif (is_month()) { ?>
						    <h1><?php _e("Monthly Archives: ", "wpbootstrap"); ?><?php the_time('F Y'); ?></h1>
						<?php } elseif (is_year()) { ?>
						    <h1><?php _e("Yearly Archives: ", "wpbootstrap"); ?><?php the_time('Y'); ?></h1>
						<?php } ?>
			    	</div>
	    		</div>
	    	</div>
		</div>
    </header>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="content-area container ">
			<article  class="col-md-12" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
				<!-- Title -->
				<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<!-- Author and tags -->
				<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>

				<!-- Fretured Image -->
				<div class="row">
					<div class="col-md-4">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img src="<?php echo $image[0]; ?>" alt="" style="width:100%;">
					</div>
					<div class="col-md-8">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</article>
		</div>
	<?php endwhile; ?>

<!-- 					<?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active ?>

						<?php wp_bootstrap_page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>


					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?> -->

<?php get_footer(); ?>