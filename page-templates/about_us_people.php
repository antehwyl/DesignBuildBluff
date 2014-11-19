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
		<div class='nav-buffer'></div>
		<div id='team-heading'>
			<h4 class='section-heading'><?php echo $team_heading; ?></h4>
		</div>

		<div id='team-members' class='cf'>
			<?php foreach($team_members as $row): ?>
				<div class='single-team-member'>
					<div class='member-img-wrap'>
						<img src='<?php echo $row['image']['url']; ?>' />
					</div>
					<h4 class='member-name'><?php echo $row['name']; ?></h4>
					<p class='member-position'><?php echo $row['position']; ?></p>
					<p class='member-desc'><?php echo $row['description']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<div id='supporters-heading'>
			<?php foreach($supporters_heading as $row): ?>
				<h4 class='section-heading'><?php echo $row['heading']; ?></h4>
				<p class='section-sub-heading'><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='supporters' class='cf'>
			<?php foreach($supporters as $row): ?>
				<div class='single-supporter'>
					<div class='supporter-img-wrap'>
						<img src='<?php echo $row['image']['url']; ?>' />
					</div>
					<h4 class='member-name'><?php echo $row['name']; ?></h4>
					<p class='member-position'><?php echo $row['position']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();