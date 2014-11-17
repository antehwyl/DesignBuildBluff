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
			<h2><?php the_title(); ?></h2>
			<p><?php echo $headline; ?></p>
		</div>
		
		<div id='project-body'>
			<?php foreach($body as $row): ?>
				
				<?php if($row['type'] == 'Text'): /* Text Row */ ?>
					<p><?php echo $row['text']; ?></p>
				<?php endif; ?>

				<?php if($row['type'] == 'Image'): /* Image Row */ ?>
					
					<?php if($row['image'][0]['width'] == 'Full' ): /* Full width image */ ?>
						<img src='<?php echo $row['image'][0]['image']['url']; ?>' class='full-width' />
					<?php endif; ?>

					<?php if($row['image'][0]['width'] == 'Half' ): /* Half width image */ ?>
						<img src='<?php echo $row['image'][0]['image']['url']; ?>' class='half-width' />
					<?php endif; ?>

				<?php endif; ?>
			<?php endforeach; ?>
		</div>

		<div id='project-nav'>
			<div class='left'>
				
				<?php $our_work_page = get_page_by_title( 'Our Work' );  ?>
				<div id='home-link'><a href='<?php echo $our_work_page->guid; ?>'><p>All Projects</p></a></div>
			</div>
			<div class='right'>
				<a>Previous</a>
				<a>Next</a>
			</div>
		</div>

	</div>
</div>

<?php get_footer();