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
	<div id='content-inner'>
		
		<?php foreach($page_section as $row): ?>
			<div class='page_section'>
				<h4><?php echo $row['heading']; ?></h4>
				<p><?php echo $row['text']; ?></p>
				<a href='<?php echo $row['link']; ?>' target='_blank'><p><?php echo $row['link_text']; ?></p></a>
			</div>
		<?php endforeach; ?>

	</div>
</div>

<?php get_footer();