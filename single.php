<?php get_header(); ?>
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<header class="single-page" style="background-image: url('<?php echo $image[0]; ?>')">
			<div class="layer">
				<div class="title">
		    		<div class="container">
		    			<div class="col-md-8 col-md-offset-2 col-xs-12">
					        <h1><?php echo get_the_title(); ?></h1>
				    	</div>
		    		</div>
		    	</div>
			</div>
	    </header>
	<?php endif; ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="content-area container ">
			<article  class="col-md-12 page" id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				<?php the_content(); ?>
				<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
			</article>
		</div>
	<?php endwhile; ?>

	<?php else : ?>
		<article id="post-not-found">
		    <header>
		    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
		    </header>
		    <section class="post_content">
		    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
		    </section>
		    <footer>
		    </footer>
		</article>
	<?php endif; ?>
<?php get_footer(); ?>