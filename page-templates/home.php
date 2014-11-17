<?php
/*
*
* Template Name: Home Page
*
*/

get_header(); ?>
<?php 
/* Variables */
$splash 	= get_field('splash_section');
$who		= get_field('who_we_are');
$featured 	= get_field('featured_projects');
?>

<div id='content-wrap' class='home-content'>
	<div id='content-inner'>
		
		<div id='home-splash'>
			<?php foreach($splash as $row): ?>
				<img src='<?php echo $row['image']['url']; ?>' />
				<h3><?php echo $row['caption']; ?></h3>
			<?php endforeach; ?>
		</div>
		
		<div id='home-who'>
			<?php foreach($who as $row): ?>
				<h4><?php echo $row['heading']; ?></h4>
				<p><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='home-featured'>
			<?php foreach($featured as $row): ?>
				<div class='featured-item'>
					<img src='<?php echo $row['image']['url']; ?>' />
					<h5><?php echo $row['title']; ?></h5>
				</div>
			<?php endforeach; ?>
		</div>

		<div id='home-blog'>
			<h4>From the Blog</h4>
			
		</div>

	</div>
</div>

<?php get_footer();