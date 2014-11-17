<?php
/*
*
* Template Name: About Us - Approach
*
*/

get_header(); ?>
<?php 
/* Variables */
$section_one 	= get_field('section_1');
$video			= get_field('video');
$section_two 	= get_field('section_2');
$images			= get_field('images');
?>

<div id='content-wrap' class='approach-content'>
	<div id='content-inner'>
		
		<div id='section-one'>
			<?php foreach($section_one as $row): ?>
				<h4<?php echo $row['heading']; ?></h4>
				<p><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='video'>
			<?php echo $video; ?>
		</div>

		<div id='section-two'>
			<?php foreach($section_two as $row): ?>
				<h4<?php echo $row['heading']; ?></h4>
				<p><?php echo $row['text']; ?></p>
				<p><?php echo $row['second_text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='images'>
			<?php foreach($images as $row): ?>
				<img src='<?php echo $row['image']['url']; ?>' />
			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();