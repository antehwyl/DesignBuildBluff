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
		<div class='nav-buffer'></div>
		<div id='section-one'>
			<?php foreach($section_one as $row): ?>
				<h4 class='section-heading'><?php echo $row['heading']; ?></h4>
				<p class='section-sub-heading'><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='video'>
			<?php foreach($video as $row): ?>
				<a class='fancybox-video' href='<?php echo $row['iframe']; ?>'>
					<div class='video-screencap'>
						<img src='<?php echo $row['thumbnail']['url']; ?>' />
						
						<div id='video-text-wrap'>
							<div id='play-button'><span>PLAY</span></div>
							<div id='play-preload'></div>
						
						</div>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

		<div id='section-two'>
			<?php foreach($section_two as $row): ?>
				<h4 class='section-heading' ><?php echo $row['heading']; ?></h4>
				<p class='section-sub-heading'><?php echo $row['text']; ?></p>
				<p class='section-two-text'><?php echo $row['second_text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='images' class='cf'>
			<?php $i=0; foreach($images as $row): $i++; ?>
				<img src='<?php echo $row['image']['url']; ?>' class='<?php echo 'picture-'.$i; ?>' />
			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();