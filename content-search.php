<?php
/**
 * Search Entry
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	return;
}
	
//start loop
while ( have_posts() ) : the_post(); ?>

<article <?php post_class('blog-entry clearfix'); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="blog-entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>"><?php the_post_thumbnail( 'wpex-entry' ); ?></a>
			</div><!-- /blog-entry-thumbnail -->
		<?php endif; ?>
		<div class="entry-text clearfix">
			<header>
				<h2><a href="<?php the_permalink(); ?>" title="<?php wpex_esc_title(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<?php wpex_excerpt(); ?>
			<ul class="entry-meta">
				<li><strong>Posted on:</strong> <?php echo get_the_date(); ?></li>
			</ul><!-- /entry-meta -->
		</div><!-- /entry-text -->
	</article><!-- .entry -->

<?php endwhile; ?>