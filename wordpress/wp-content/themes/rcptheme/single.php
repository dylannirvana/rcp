<?php
/**
 * The template for displaying all single posts.
 *
 * @package rcptheme
 */

get_header('blog'); ?>
<section class="scene news container"> 

THIS IS SINGLE.PHP
	<div id="primary" class="content">
      
	    <article class="blogmain"> <!-- BLOG MAIN -->
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php endwhile; // end of the loop. ?>
		</article>

	    <aside class="blogside"> <!-- THE SIDEBAR -->
			<?php get_sidebar(); ?>
		</aside>
	</div>
</section>
<?php get_footer(); ?>
