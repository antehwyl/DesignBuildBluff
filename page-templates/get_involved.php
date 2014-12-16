<?php
/*
*
* Template Name: Get Involved Page
*
*/

get_header(); ?>
<?php 
/* Variables */
$page_section 	= get_field('page_section');
?>

<div id='content-wrap' class='involved-content'>
	
	

	<div id='content-inner' class='cf'>
		<div class='nav-buffer'></div>
		
		
		
		<div id='involved-wrapper'>
			<?php $i=0; foreach($page_section as $row): $i++;?>
				<div class='page_section <?php echo 'section'.$i; ?>'>
					<h4 class='section-heading'><?php echo $row['heading']; ?></h4>
					<p class='section-sub-heading'><?php echo $row['text']; ?></p>
					<a href='<?php echo $row['link']; ?>' target='_blank'><p class='section-link'><?php echo $row['link_text']; ?></p></a>
					<div id='involved-illus-<?php echo $i; ?>'></div>
				</div>
			<?php endforeach; ?>
		</div>

	</div>

</div>

<?php get_footer();