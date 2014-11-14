<?php
/*
*
* Template Name: Teaser Page
*
*/

get_header(); ?>
<?php 
/* Variables */
$splash 	= get_field('splash_image');
$who		= get_field('who_section');
$video 		= get_field('video');
$connected 	= get_field('stay_connected_section');
$contact 	= get_field('contact_section'); 
?>

<div id='content-wrap' class='teaser-content'>
	<div id='content-inner'>
		<div id='home-splash-section'>
			<?php foreach($splash as $row): ?>
				<img src='<?php echo $row['image']['url']; ?>' />
				<div id='nav-buffer'></div>
				<div id='home-splash-text'>
					<p><?php echo $row['text']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
		
		<div id='illustration-1-wrap'><div id='illustration-1'></div></div>
		

		<div id='who-section' class='max'>
			<?php foreach($who as $row): ?>
				<p class='who-small-heading'><?php echo $row['small_heading']; ?></p>
				<div id='who-main-text-wrap'>
					<p class='who-main-text'><?php echo $row['main_text']; ?></p>
				</div>
				<p class='who-small-text'><?php echo $row['small_text']; ?></p>
			<?php endforeach; ?>
			<div id='illustration-2-wrap'><div id='illustration-2'></div></div>
		</div>
		
		<div id='video-section' class='max'>
			<?php foreach($video as $row): ?>
				<a class='fancybox-video' href='<?php echo $row['video']; ?>'>
					<div class='video-screencap'>
						<img src='<?php echo $row['screen_cap']['url']; ?>' />
						
						<div id='video-text-wrap'>
							<div id='play-button'><span>PLAY</span></div>
							<div id='play-preload'></div>
							<p><?php echo $row['text']; ?></p>
						</div>
					</div>
				</a>

			<?php endforeach; ?>
		</div>

		<div id='illustration-3-wrap'><div id='illustration-3'></div></div>
		
		<div id='connected-section' class='max'>
			<?php foreach($connected as $row): ?>
				<p class='connected-small-heading'><?php echo $row['small_heading']; ?></p>
				<p class='connected-main-text'><?php echo $row['text']; ?></p>
				<a class='connected-link' href='<?php echo $row['link']; ?>' target='_blank'><p><?php echo $row['link_text']; ?></p></a>
			<?php endforeach; ?>
		</div>

		<div id='brush-stroke'></div><?php /* brush stroke artwork */ ?>
		
		<div id='illustration-4-wrap'><div id='illustration-4'></div></div>

		<div id='contact-section' class='max cf'>

			<?php foreach($contact as $row): ?>
				<p class='contact-small-heading'><?php echo $row['small_heading']; ?></p>
				<?php $i=0; foreach($row['contact_item'] as $item): $i++; ?>
					<div class='contact-item <?php echo 'item-'.$i; ?>'>
						<p class='contact-text'><?php echo $item['text']; ?></p>
						<?php if($item['link_type']=='email'): ?>
							<a class='contact-link' href='mailto:<?php echo $item['link']; ?>'><p><?php echo $item['link_text']; ?></p></a>
						<?php elseif($item['link_type']=='Link'): ?>
							<a class='contact-link' href='<?php echo $item['link']; ?>'><p><?php echo $item['link_text']; ?></p></a>
						<?php endif; ?>
						
					</div>
				<?php endforeach; ?>
				
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php get_footer();