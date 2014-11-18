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
		
		<div id='home-who'>
			<?php foreach($who as $row): ?>
				<h4 class='section-heading'><?php echo $row['heading']; ?></h4>
				<p><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='home-featured' class='cf'>
			<h4 class='section-heading'><?php echo $featured_heading; ?></h4>
			<?php $i=0; foreach($featured as $row): $i++; ?>
				<div class='featured-item item-<?php echo $i; ?>'>
					<img src='<?php echo $row['image']['url']; ?>' />
					<h5 class='featured-item-title'><?php echo $row['title']; ?></h5>
				</div>
			<?php endforeach; ?>
		</div>

		<div id='home-blog' class='cf'>
			<h4 class='section-heading'>From the Blog</h4>
			<?php 
				$args = array( 'numberposts' => 4 );
			    $recent_posts = wp_get_recent_posts( $args );
			?>
			<?php $i=0; foreach($recent_posts as $recent): $i++; ?>
			<?php 
			//echo '<pre>';
			//print_r($recent);
			//echo '</pre>';
			?>
				<a href='<?php echo get_post_permalink($recent['ID']); ?>'>
					<div class='recent-post recent-post-<?php echo $i; ?>'>
						<h5 class='recent-title'><?php echo get_the_title($recent['ID']); ?></h5>
						<p class='recent-date'><?php echo get_the_date($d,$recent['ID']); ?></p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();