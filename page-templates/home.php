<?php
/*
*
* Template Name: Home Page
*
*/

get_header(); ?>
<?php 
/* Variables */
$splash 			= get_field('splash_section');
$who				= get_field('who_we_are');
$featured_heading 	= get_field('featured_heading');
$featured 			= get_field('featured_projects');
?>

<div id='content-wrap' class='home-content'>
	<div id='content-inner'>
		
		<div id='home-splash'>
			<?php foreach($splash as $row): ?>
				<img src='<?php echo $row['image']['url']; ?>' />
				<div class='nav-buffer'></div>
				<div id='home-splash-text-wrap'>
					<h3><?php echo $row['caption']; ?></h3>
				</div>
			<?php endforeach; ?>
		</div>
		
		<div id='home-illus-zero'></div>

		<div id='home-who'>
			<?php foreach($who as $row): ?>
				<h4 class='section-heading'><?php echo $row['heading']; ?></h4>
				<p><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='home-illus-one'></div>

		<div id='home-featured' class='cf'>
			<h4 class='section-heading'><?php echo $featured_heading; ?></h4>
			<?php 
				$i=0; 
				foreach($featured as $row): 
					$i++;
					// override $post
					 	$post = $row['project'];
						setup_postdata( $post );
						$thumbnail = get_field('thumbnail'); 

			?>
				<a href='<?php the_permalink(); ?>'>
					<div class='featured-item item-<?php echo $i; ?>'>
						<img src='<?php echo $thumbnail['url']; ?>' />
						<h5 class='featured-item-title'><?php the_title(); ?></h5>
						<div class='hover-overlay'>
							<p>View Project</p>
						</div>
					</div>
				</a>
			<?php 
				endforeach;
				wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
			?>

			<?php /* 
			<h4 class='section-heading'><?php echo $featured_heading; ?></h4>
			<?php $i=0; foreach($featured as $row): $i++; ?>
				<div class='featured-item item-<?php echo $i; ?>'>
					<img src='<?php echo $row['image']['url']; ?>' />
					<h5 class='featured-item-title'><?php echo $row['title']; ?></h5>
				</div>
			<?php endforeach; ?>
			*/ ?>
		</div>

		<div id='home-illus-two'></div>

		<div id='home-blog' class='cf'>
			<h4 class='section-heading'>From the Blog</h4>
			<?php 
				query_posts('cat=-141&showposts=4');
			?>
			<?php $i=0; while (have_posts()) : the_post(); $i++; ?>

			 	<a href='<?php the_permalink(); ?>'>
				 	<div class='recent-post recent-post-<?php echo $i; ?>'>
				 		
				 			<img src='<?php echo catch_that_image(); ?>' />
						<div class='post-text'>
							<h5 class='recent-title'><?php echo the_title(); ?></h5>
							<p class='recent-date'><?php echo get_the_date(); ?></p>
						</div>
					</div>
				</a>
			<?php endwhile; ?>
		</div>

	</div>
</div>

<?php get_footer();