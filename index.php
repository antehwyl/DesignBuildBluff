<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content blog-content cf">
			<div class='nav-buffer'></div>
		<?php include INCLUDES_DIR.'/blog_filters.php'; /* The contact information overlay */ ?>
		<div id="content" class='cf' role="main">
		
		
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', get_post_format() ); ?>
				
				<article id='post-<?php echo get_the_ID(); ?>' class='post cf'>
					<a href='<?php the_permalink(); ?>' class='post-title'><h4><?php the_title(); ?></h4></a>
					<p class='post-date'><?php echo get_the_date(); ?></p>
					<p class='post-excerpt'><?php echo get_the_excerpt(); ?></p>
					<?php if ( get_the_post_thumbnail($post_id) != '' ) : ?>

						<?php the_post_thumbnail(); ?>
					  
					<?php elseif(catch_that_image()): ?>

						<img src='<?php echo catch_that_image(); ?>' />
						
					<?php endif; ?>

					
					<a href='<?php the_permalink(); ?>' class='read-more-link'><p>Read More</p></a>
				</article>
				
			<?php endwhile; ?>

			<?php twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>