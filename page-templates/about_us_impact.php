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
		
		<div id='section-one'>
			<?php foreach($section_one as $row): ?>
				<h4><?php echo $row['heading'] ?></h4>
				<p><?php echo $row['sub_heading']; ?></p>
				<p><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='video'>
			<?php echo $video; ?>
		</div>

		<div id='awards_heading'>
			<h4><?php echo $awards_heading; ?></h4>
		</div>

		<div id='awards'>
			<?php foreach($awards as $row): ?>
				<p><?php echo $row['award']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='press_heading'>
			<?php echo $press_heading; ?>
		</div>

		<div id='press'>
			<?php foreach($press as $row): ?>
				
				<?php if($row['link']): /* If there is a link */ ?>
					<a href='<?php echo $row['link']; ?>'><p><?php echo $row['item']; ?></p></a>
				<?php endif; ?>

				<?php if(!$row['link']): /* If there is no link */ ?>
					<p><?php echo $row['item']; ?></p>
				<?php endif; ?>

			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();