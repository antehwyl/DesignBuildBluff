<?php
/*
*
* Template Name: About Us - Impact
*
*/

get_header(); ?>
<?php 
/* Variables */
$section_one 	= get_field('section_1');
$video			= get_field('video');
$awards_heading = get_field('awards_heading');
$awards			= get_field('awards');
$press_heading 	= get_field('press_heading');
$press 			= get_field('press');
?>

<div id='content-wrap' class='impact-content'>
	<div id='content-inner'>
		<div class='nav-buffer'></div>
		
		<div id='impact-illus-one'></div>

		<div id='section-one' class='cf'>
			<?php foreach($section_one as $row): ?>
				<h4 class='section-heading'><?php echo $row['heading'] ?></h4>
				<p class='section-sub-heading'><?php echo $row['sub_heading']; ?></p>
				<p class='section-text'><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='video' class='cf'>
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

		<div id='impact-illus-two'></div>

		<div id='awards-heading'>
			<h4 class='section-heading'><?php echo $awards_heading; ?></h4>
		</div>

		<div id='awards'>
			<?php foreach($awards as $row): ?>
				<p><?php echo $row['award']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='press-heading'>
			<h4 class='section-heading'><?php echo $press_heading; ?></h4>
		</div>

		<div id='press'>
			<?php foreach($press as $row): ?>
				
				<?php if($row['link']): /* If there is a link */ ?>
					<div>
						<a href='<?php echo $row['link']; ?>'><p><?php echo $row['item']; ?></p></a>
					</div>
				<?php endif; ?>

				<?php if(!$row['link']): /* If there is no link */ ?>
					<p><?php echo $row['item']; ?></p>
				<?php endif; ?>

			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();