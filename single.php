<?php
/**
 * The Template for displaying all single posts.
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

get_header();

if ( have_posts()) : while ( have_posts()) : the_post(); ?>

	<?php
	// Display media
	if ( 'quote' != get_post_format() ) {
		get_template_part( 'content', get_post_format() ); 
	} ?>

	<div id="single-post-content" class="sidebar-bg container clearfix">
		
		<div id="post" class="clearfix">

			<?php
			// Show header on all post formats except quotes
			if ( 'quote' != get_post_format() ) : ?>
				<header id="post-header">
					<h1><?php the_title(); ?></h1>
					<ul class="meta clearfix">
						<li><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></li>
						<li><i class="fas fa-hashtag"></i> <?php the_category( ',' ); ?></li>
						<?php if ( comments_open() ) : ?>
							<li class="comment-scroll"><i class="far fa-comment"></i> <?php comments_popup_link(__('0 Comments', 'tetris'), __('1 Comment', 'tetris'), __('% Comments', 'tetris'), 'comments-link' ); ?></li>
						<?php endif; ?>
					</ul><!-- .meta -->
				</header><!-- #post-header -->
			<?php endif; ?>

			<article <?php post_class('entry clearfix fitvids'); ?>>
				<div class="inner-post">
					<?php the_content(); // This is your main post content output ?>
					<?php if ( get_post_format() == 'quote' ){ ?>
						<div class="quote-author">&#8211; <?php the_title(); ?></div>
					<?php } ?>
				</div><!-- .inner-post -->
			</article><!-- .entry -->

			<?php wp_link_pages();?>

			<?php the_tags( '<div id="post-tags" class="clearfix">', '', '</div>' ); ?>


			<?php comments_template(); ?>

		</div><!-- post -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- #single-post-content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>