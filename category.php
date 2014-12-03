<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content category-content cf">
		<div class='nav-buffer'></div>
		<?php include INCLUDES_DIR.'/blog_filters.php'; /* The contact information overlay */ ?>
		<div id="content" class='cf' role="main">
			
		<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				//get_template_part( 'content', get_post_format() );
			?>
				
				<article id='post-<?php echo get_the_ID(); ?>' class='post cf'>
					<a href='<?php the_permalink(); ?>' class='post-title'><h4><?php the_title(); ?></h4></a>
					<p class='post-date'><?php echo get_the_date(); ?></p>
					<?php if( get_the_excerpt() ): ?>
					<p class='post-excerpt'><?php echo get_the_excerpt(); ?></p>	
				<?php endif; ?>
					<?php if ( get_the_post_thumbnail($post_id) != '' ) : ?>

						<?php the_post_thumbnail(); ?>
					  
					<?php elseif(catch_that_image()): ?>

						<img src='<?php echo catch_that_image(); ?>' />
					
					<?php endif; ?>

					
					<a href='<?php the_permalink(); ?>' class='read-more-link'><p>Read More</p></a>
				</article>

			<?php
			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>