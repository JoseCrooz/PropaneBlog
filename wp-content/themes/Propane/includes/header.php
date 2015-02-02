<header data-controller="category">
  <div class="grid-wrap">
    <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/ps-logo.png" /></a></div>
    <div class="category">
      <ul class="category-nav">
        <li><a href="" class="category-nav-link"><span>Category</span><span class="cat-chevron-icon ir">category chevron icon</span></a>
          <ul class="category-nav-dropdown">
            <li><a href="/?cat=<?php echo get_cat_ID('Company'); ?>">Company</a></li>
            <li><a href="/?cat=<?php echo get_cat_ID('Strategy'); ?>">Strategy</a></li>
            <li><a href="/?cat=<?php echo get_cat_ID('Creative'); ?>">Creative</a></li>
            <li><a href="/?cat=<?php echo get_cat_ID('Development'); ?>">Development</a></li>
            <li><a href="/?cat=<?php echo get_cat_ID('Press'); ?>">Press</a></li>
            <li><a href="/?cat=<?php echo get_cat_ID('Awards'); ?>">Awards</a></li>
            <li><a href="/?cat=<?php echo get_cat_ID('Launches'); ?>">Launches</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="category-nav-sm">
      <ul>
          <li><a href="/?cat=<?php echo get_cat_ID('Company'); ?>">Company</a></li>
          <li><a href="/?cat=<?php echo get_cat_ID('Strategy'); ?>">Strategy</a></li>
          <li><a href="/?cat=<?php echo get_cat_ID('Creative'); ?>">Creative</a></li>
          <li><a href="/?cat=<?php echo get_cat_ID('Development'); ?>">Development</a></li>
          <li><a href="/?cat=<?php echo get_cat_ID('Press'); ?>">Press</a></li>
          <li><a href="/?cat=<?php echo get_cat_ID('Awards'); ?>">Awards</a></li>
          <li><a href="/?cat=<?php echo get_cat_ID(''); ?>">Launches</a></li>
      </ul>
    </div>
    <div class="search-area" data-controller="search">
      <div class="pre-search">
        <span>we fuel brands<sup>&trade;</sup></span>
        <span class="search-icon"><a href="" class="mag-glass ir">search</a></span>
      </div>
      <div class="searching clearfix">
        <?php get_search_form(); ?>
      </div>
    </div>
  </div><!--end grid-wrap-->
</header>