<?php


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

get_header(); ?>

<header id="page-heading">
	<h1 id="archive-title"><?php _e( 'Search Results For', 'tetris' ); ?>: &quot;<?php the_search_query(); ?>&quot;</h1>
</header><!-- #page-heading -->


<?php if ( have_posts() ) : ?>

	<div id="blog-wrap" class="blog-isotope clearfix">
		<?php while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );   
		endwhile; ?>           
	</div><!-- #blog-wrap -->

	<?php wpex_pagination(); ?>

<?php else :
		_e('<p style="font-size:1.4em; text-align: center">Sorry, no results were found.</p>','tetris');

      endif; ?>

<?php get_footer(); ?>