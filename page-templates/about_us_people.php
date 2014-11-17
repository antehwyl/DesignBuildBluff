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
			<h4><?php echo $team_heading; ?></h4>
		</div>

		<div id='team-members'>
			<?php foreach($team_members as $row): ?>
				<div class='single-team-member'>
					<img src='<?php echo $row['image']['url']; ?>' />
					<h4><?php echo $row['name']; ?></h4>
					<p><?php echo $row['position']; ?></p>
					<p><?php echo $row['description']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<div id='supporters-heading'>
			<?php foreach($supporters_heading as $row): ?>
				<h4><?php echo $row['heading']; ?></h4>
				<p><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='supporters'>
			<?php foreach($supporters as $row): ?>
				<div class='single-supporter'>
					<img src='<?php echo $row['image']['url']; ?>' />
					<h4><?php echo $row['name']; ?></h4>
					<p><?php echo $row['position']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();