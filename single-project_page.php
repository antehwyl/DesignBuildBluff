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
$credits 	= get_field('credits');
?>

<div id='content-wrap' class='project-content'>
	<div id='content-inner'>
		<div id='project-heading'>
			<div class='nav-buffer'></div>
			<h2 id='project-title'><?php the_title(); ?></h2>
			<p id='project-headline'><?php echo $headline; ?></p>
		</div>
		
		<div id='project-body' class='cf'>
			<?php $i=0; foreach($body as $row): $i++; ?>
				
				<?php if($row['type'] == 'Text'): /* Text Row */ ?>
					<p class="cf project-text text <?php echo 'row'.$i; ?>"><?php echo $row['text']; ?></p>
				<?php endif; ?>

				<?php if($row['type'] == 'Headline'):  ?>
					<?php
						//echo '<pre>';
						//print_r($row);
						//echo '</pre>';
					 ?>

					<p class="cf project-text headline <?php echo 'row'.$i; ?>"><?php echo $row['headline']; ?></p>
				<?php endif; ?>
				
				<?php if($row['type'] == 'Image'): /* Image Row */ ?>

					<div class='<?php echo $row["image"][0]["width"]; ?> cf <?php echo 'row'.$i; ?>'>
						<img src='<?php echo $row['image'][0]['image']['url']; ?>' />
					</div> 	

				<?php endif; ?>
			<?php endforeach; ?>
		</div>
		
		<?php if(have_rows('credits')): ?>
			<div id='project-credits'>
				<h4 class='section-heading'>Credits</h4>
				<div id='credits-names'>
					<?php foreach($credits as $row): ?>
						<p><?php echo $row['text']; ?></p>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
		
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