<?php 
  include_once('includes/page-head.php');
?>
<title>Propane Studio</title>
<meta name="description" content="">
<?php 
  include_once('includes/scripts-header.php');
?>
</head>
  <body class="detail-page">

    <div id="container" class="frame">
  
      <?php 
        include_once('includes/header.php');
      ?>
      
        <section id="main" role="main" class="row expand clearfix">
      
      <?php 
        include_once('includes/upgrade-browser.php');
      ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- Article -->
		<article id="post-<?php the_ID(); ?>" class="blog-article">
			<div class="grid-wrap">
				<div class="blog-image">
					<?php the_post_thumbnail('full');?>
				</div>
				
				<div class="blog-cap">
					<div class="blog-date">
						<p class="month"><?php the_time('M'); ?></p>
						<p class="day"><?php the_time('j'); ?></p>
					</div><!--end blog-date-->
					<div class="blog-author">
						<p class="blog-category">
							<?php
								$category = get_the_category();
								printf('<a href="/?cat='.get_cat_ID($category[0]->cat_name).'">' . $category[0]->cat_name . '</a>' );
							?>
						</p>
						<p class="author"><?php the_author(); ?></p>
					</div><!--end blog-author-->
					<div class="blog-title">
						<h1><?php the_title(); ?></h1>
					</div><!--end blog-title-->
				</div><!--end blog-cap-->
				
				<div class="blog-content">
					<div class="tags">
						<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
					</div><!--end tags-->
					<div class="blog-body">
						<div class="social-buttons">
							<?php echo do_shortcode('[sharethis]'); ?>
						</div><!--end social buttons-->
						<div class="blog-body-copy clearfix">
							<h4><span><?php
								$category = get_the_category();
								printf('<a href="/?cat='.get_cat_ID($category[0]->cat_name).'">' . $category[0]->cat_name . '</a>' );
							?></span><?php the_author(); ?></h4>
							<?php the_content(); ?>
							<?php the_tags('<ul class="blog-body-tags"><li>','</li><li>','</li></ul>'); ?>
							<?php echo do_shortcode('[sharethis]'); ?>
						</div><!--end blog-body-copy-->
					</div><!--end blog-body-->
				</div><!--end blog-content-->
			</div><!--end grid-wrap-->
		</article>
		<article class="blog-comments">
      <div class="grid-wrap">
				<?php comments_template(); ?>
			</div>
    </article>
		<!-- /Article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- Article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			
		</article>
		<!-- /Article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /Section -->
<?php 
      include_once('includes/footer.php');
    ?>
          
  </div><!--end container-->
  
  <?php 
    include_once('includes/scripts-footer.php');
  ?>

  </body>
</html>