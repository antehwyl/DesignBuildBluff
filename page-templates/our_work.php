<?php
/*
*
* Template Name: Our Work Page
*
*/

get_header(); ?>
<?php 
/* Variables */
$featured_project = get_field('featured_project');
$projects 	= get_field('projects');
?>

<div id='content-wrap' class='our-work-content'>
	<div id='content-inner'>
		
		<?php 
			if( $featured_project ): 
			// override $post
			$post = $featured_project;
			setup_postdata( $post ); 
		?>
		    <div id='featured-project'>

		    	<div class='nav-buffer'></div>

		    	<?php 
		    		$thumbnail 	= get_field('thumbnail');
		    		$year 		= get_field('year');
		    	?>
		    	<img src='<?php echo $thumbnail['url']; ?>' />
		    	<div id='featured-text-wrap'>
		    		<div id='text-wrap-inner'>
		    			<p class='featured-text'>Featured</p>
						<a href='<?php the_permalink(); ?>' id='featured-link'>
							<p><?php echo $year; ?></p>
							<h3><?php echo the_title(); ?></h3>
							<p id='view-project'>View Project</p>
						</a>
		    		</div>
		    	</div>
		    	
		    </div>
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>

		<div id='other-projects' class='cf'>
			<?php if($projects):
				
					$i=0;
					foreach($projects as $row):
						$i++;
						// override $post
					 	$post = $row['project'];
						setup_postdata( $post );
						$thumbnail_two = get_field('thumbnail');
						$year_two = get_field('year');
						
			?>
					<a href='<?php the_permalink(); ?>'>
						<div class='sub-project <?php if($i%2==0){echo 'even-project';} if($i%2!=0){echo 'odd-project';}  ?>'>
							<img src='<?php echo $thumbnail_two['url'];?>' />
							<div class='sub-project-text-wrap'>
								<p><?php echo $year_two; ?></p>
								<h3><?php echo the_title(); ?></h3>
								
							</div>
							<div class='hover-overlay'>
								<p>View Project</p>
							</div>
						</div>
					</a>
			<?php 
					endforeach;
					wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
				endif; 
			?>
		</div>

	</div>
</div>

<?php get_footer();