<?php
/*
*
* Template Name: Project Page
*
*/

get_header(); ?>
<?php 
/* Variables */
$title 		= get_field('title');
$headline 	= get_field('headline');
$body 		= get_field('content');
?>

<div id='content-wrap' class='project-content'>
	<div id='content-inner'>
		<div id='project-heading'>
			<div class='nav-buffer'></div>
			<h2 id='project-title'><?php the_title(); ?></h2>
			<p id='project-headline'><?php echo $headline; ?></p>
		</div>
		
		<div id='project-body' class='cf'>
			<?php foreach($body as $row): ?>
				
				<?php if($row['type'] == 'Text'): /* Text Row */ ?>
					<p class='project-text'><?php echo $row['text']; ?></p>
				<?php endif; ?>

				<?php if($row['type'] == 'Image'): /* Image Row */ ?>
					
					<?php if($row['image'][0]['width'] == 'Full Width' ): /* Full width image */ ?>
						<img src='<?php echo $row['image'][0]['image']['url']; ?>' class='full-width' />
					<?php endif; ?>

					<?php if($row['image'][0]['width'] == 'Half Width Left' ): /* Half width image */ ?>
						<img src='<?php echo $row['image'][0]['image']['url']; ?>' class='half-width-left' />
					<?php endif; ?>

					<?php if($row['image'][0]['width'] == 'Half Width Right' ): /* Half width image */ ?>
						<img src='<?php echo $row['image'][0]['image']['url']; ?>' class='half-width-right' />
					<?php endif; ?>

				<?php endif; ?>
			<?php endforeach; ?>
		</div>

		<div id='project-nav' class='cf'>
			<div class='left'>
				
				<?php $our_work_page = get_page_by_title( 'Our Work' );  ?>
				<div id='home-link'><a href='<?php echo $our_work_page->guid; ?>'><p>All Projects</p></a></div>
			</div>
			<div class='right cf'>
				
				<?php 	
					$prev_link = previous_post_link( '%link', 'Previous', TRUE );
					$next_link = next_post_link( '%link', 'Next', TRUE );
				?>

			</div>
		</div>

	</div>
</div>

<?php get_footer();