<?php 
/* Variables */
$cur_cat_id = get_cat_id( single_cat_title("",false) );
$blog_page = get_page_by_title( 'Blog' );
//echo '<pre>';
//print_r($blog_page);
//echo '</pre>';
$category = array(
	'show_option_all'    => '',
	'show_option_none'   => 'Clear Filter',
	'orderby'            => 'NAME', 
	'order'              => 'ASC',
	'show_count'         => 0,
	'hide_empty'         => 1, 
	'child_of'           => 0,
	'exclude'            => '141',
	'echo'               => 1,
	'selected'           => $cur_cat_id,
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
	//auto submit handeler for categories filter on blog pages
	(function($){
		$(document).ready(function(){
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
				}
				if ( dropdown.options[dropdown.selectedIndex].value == -1 ){
					location.href = "<?php echo $blog_page->guid; ?>";
					//console.log('blog home');
				}
			}
			dropdown.onchange = onCatChange;

			var archives = $('#archive-filters').find('option');
			var active_archives = false;
			
			$.each(archives,function(i){
				if($(archives[i]).hasClass('current')){
					active_archives = true;
				}
			});
			if( active_archives == true ){
				$('#archive-filters').addClass('active-archives');
				$(archives[0]).html("Clear Filter");
			}
		});	
	})(jQuery);
</script>

<div id='blog-filters' class='cf'>
	
	<div id='category-filters' class='<?php if( $cur_cat_id!=0 ){echo 'active-category';} ?>'>
		<p>Filter</p>
		<div class='select-wrap cf'>
			<?php  wp_dropdown_categories( $category ); ?>
		</div>
	</div>

	<div id='archive-filters'>
		<p>Archives</p>		
		<div class='select-wrap cf'>
			<select name="archive-menu" onChange="document.location.href=this.options[this.selectedIndex].value;">
				<option value="<?php echo $blog_page->guid;?>">Select month</option>
				<?php wp_get_archives('type=monthly&format=option'); ?>
			</select>
		</div>
	</div>
</div>