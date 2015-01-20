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
$advisors_heading	= get_field('advisors_heading');
$advisors 			= get_field('advisors');
?>

<div id='content-wrap' class='people-content'>
	<div id='content-inner'>
		<div class='nav-buffer'></div>
		<div id='team-heading'>
			<h4 class='section-heading'><?php echo $team_heading; ?></h4>
		</div>

		<div id='people-illus-one'></div>

		<div id='team-members' class='cf'>
			<?php $i=0; foreach($team_members as $row): $i++; ?>
				<div class='single-team-member <?php echo 'row-'.$i; ?>'>
					<div class='member-img-wrap'>
						<img src='<?php echo $row['image']['url']; ?>' />
					</div>
					<h4 class='member-name'><?php echo $row['name']; ?></h4>
					<p class='member-position'><?php echo $row['position']; ?></p>
					<p class='member-desc'><?php echo $row['description']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<div id='people-illus-two'></div>

		<div id='supporters-heading'>
			<?php foreach($supporters_heading as $row): ?>
				<h4 class='section-heading'><?php echo $row['heading']; ?></h4>
				<p class='section-sub-heading'><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='people-illus-three'></div>

		<div id='supporters' class='cf'>
			<?php $i=0; foreach($supporters as $row): $i++; ?>
				<div class='single-supporter <?php echo 'row-'.$i; ?>'>
					<div class='supporter-img-wrap'>
						<img src='<?php echo $row['image']['url']; ?>' />
					</div>
					<h4 class='member-name'><?php echo $row['name']; ?></h4>
					<p class='member-position'><?php echo $row['position']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>

		<div id='advisors-heading' class='cf'>
			<?php foreach($advisors_heading as $row): ?>
				<h4 class='section-heading'><?php echo $row['heading']; ?></h4>
				<p class='section-sub-heading'><?php echo $row['text']; ?></p>
			<?php endforeach; ?>
		</div>

		<div id='advisors' class='cf'>
			<?php foreach($advisors as $row): ?>
				<?php if($row['link']): ?>
					<a href='<?php echo $row['link']; ?>'><p><?php echo $row['name']; ?></p></a>
				<?php else: ?>
					<p><?php echo $row['name']; ?></p>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>

	</div>
</div>

<?php get_footer();