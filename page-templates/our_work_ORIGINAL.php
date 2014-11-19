<?php
/*
*
* Template Name: Our Work Page Original-old
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
					<div class='nav-buffer'></div>
					<div id='featured-text-wrap'>
						<div id='text-wrap-inner'>
							<p class='featured-text'>Featured</p>
							<a href='<?php echo $row['link']; ?>'><h3><?php echo $row['title']; ?></h3></a>
						</div>
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
		
		<div id='other-projects' class='cf'>
			<?php $i=0; foreach($projects as $row): $i++; ?>
				<?php if($i>1): ?>
					<a href='<?php echo $row['link']; ?>'>
						<div class='sub-project <?php if($i%2==0){echo 'even-project';} if($i%2!=0){echo 'odd-project';}  ?>'>
							<img src='<?php echo $row['image']['url']; ?>' />
							<div class='sub-project-text-wrap'>
								<h3><?php echo $row['title']; ?></h3>
								<p class='visit-text'>Visit Project</p>
							</div>
						</div>
					</a>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
		

	</div>
</div>

<?php get_footer();