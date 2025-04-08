<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/YuvoiceLogo.png" alt="<?php bloginfo('name'); ?>" class="yuvoice-logo" />
</a>
	<div class="top-bar-left float-left">
		<ul class="dropdown menu" data-dropdown-menu data-responsive-menu="drilldown medium-dropdown">
		<?php
// In a theme template file, e.g., sidebar.php or wherever you want the list:
wp_list_categories( array(
    'taxonomy'   => 'editorial',   // our custom taxonomy slug
    'title_li'   => '',            // remove default title <li>
    'show_count' => false,          // optionally show term post counts
		'title_li' => 'Editorial Stories',
		'orderby' => 'name',
		'order' => 'ASC',
		'hide_empty' => false,
		'style' => 'list'
) );
?>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>
