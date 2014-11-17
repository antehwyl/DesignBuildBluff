<?php
/*
*
* Template Name: Our Work Page
*
*/

get_header(); ?>
<?php 
/* Variables */
$projects 	= get_field('projects');
?>

<div id='content-wrap' class='our-work-content'>
	<div id='content-inner'>
		
		
		<?php $i=0; foreach($projects as $row): $i++; ?>
			<?php if($i==1): ?>
				<div id='featured-project'>
					<img src='<?php echo $row['image']['url']; ?>' />
					<p class='featured-text'>Featured</p>
					<a href='<?php echo $row['link']; ?>'><h2><?php echo $row['title']; ?></h2></a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	
		<?php $i=0; foreach($projects as $row): $i++; ?>
			<?php if($i>1): ?>
				<a href='<?php echo $row['link']; ?>'>
					<div id='sub-projects'>
						<img src='<?php echo $row['image']['url']; ?>' />
						<h3><?php echo $row['title']; ?></h3>
						<p class='visit-text'>Visit Project</p>
					</div>
				</a>
			<?php endif; ?>
		<?php endforeach; ?>
		

	</div>
</div>

<?php get_footer();