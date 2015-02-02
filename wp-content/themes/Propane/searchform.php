<!-- Searchform -->
<form method="get" class="search-form" action="<?php echo home_url(); ?>" >
	<input id="s" class="search-field" type="text" name="s" value="search">
	<input class="searchsubmit" type="image" src="<?php echo get_template_directory_uri(); ?>/img/sprites/icons/orange-magnifying-glass.png" value="<?php _e( 'Search', 'html5blank' ); ?>">
	<!--<a href="" class="close-btn"><img class="search-close" src="</?php echo get_template_directory_uri(); ?>/img/sprites/icons/search-close.png" /></a>-->
	<a href="" class="search-close-btn ir">close</a>
</form>
<!-- /Searchform -->