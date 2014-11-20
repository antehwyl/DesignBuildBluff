<?php 
/* Variables */
$category = array(
	'show_option_all'    => '',
	'show_option_none'   => 'All Posts',
	'orderby'            => 'NAME', 
	'order'              => 'ASC',
	'show_count'         => 0,
	'hide_empty'         => 1, 
	'child_of'           => 0,
	'exclude'            => '141',
	'echo'               => 1,
	'selected'           => 0,
	'hierarchical'       => 0, 
	'name'               => 'cat',
	'id'                 => '',
	'class'              => 'postform',
	'depth'              => 0,
	'tab_index'          => 0,
	'taxonomy'           => 'category',
	'hide_if_empty'      => false,
);

$archives = array(
	'type'            => 'monthly',
	//'limit'           => '',
	'format'          => 'opiton', 
	//'before'          => '',
	//'after'           => '',
	'show_post_count' => 1,
	//'echo'            => 1,
	//'order'           => 'ASC'
);
?>
<script type="text/javascript">
	//auto submit handeler for categories filter
	(function($){
		$(document).ready(function(){
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
				}
			}
			dropdown.onchange = onCatChange;
		});	
	})(jQuery);
</script>

<div id='blog-filters' class='cf'>
	
	<div id='category-filters'>
		<p>Filter</p>
		<div class='select-wrap cf'>
			<?php  wp_dropdown_categories( $category ); ?>
		</div>
	</div>

	<div id='archive-filters'>
		<p>Archives</p>		
		<div class='select-wrap cf'>
			<select name="archive-menu" onChange="document.location.href=this.options[this.selectedIndex].value;">
				<option value="">Select month</option>
				<?php wp_get_archives('type=monthly&format=option'); ?>
			</select>
		</div>
	</div>
</div>