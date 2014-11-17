<?php
/*
*
* Template Name: About Us - People
*
*/

get_header(); ?>
<?php 
/* Variables */
$team_heading 		= get_field('team_heading');
$team_members		= get_field('team_members');
$supporters_heading = get_field('supporters_heading');
$supporters			= get_field('supporters');
?>

<div id='content-wrap' class='people-content'>
	<div id='content-inner'>
		
		<div id='team-heading'>
			<h3><?php echo $team_heading; ?></h3>
		</div>

		<div></div>

		<div></div>

		<div></div>

	</div>
</div>

<?php get_footer();