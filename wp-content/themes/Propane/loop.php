<?php
/*global $wp_query;
$args = array_merge( $wp_query->query, array( 'post_type' => array('post','twitter','gallery') ) );
query_posts( $args );*/
propane_pre_get_posts_filter();
if (have_posts()): while (have_posts()) : the_post(); ?>

	<!--</?php if(get_the_title()!='tweet'): ?>-->
	<?php $postType = get_post_type( $post->ID ); if($postType=='twitter'): ?>
	
	<article class="social-article">
    <div class="grid-wrap">
      
      <div class="social-content">
        <div class="blog-date">
          <p class="month"><?php the_time('M'); ?></p>
          <p class="day"><?php the_time('j'); ?></p>
        </div><!--end social date-->
        <div class="social-preview">
          <div class="social-icon">
						<span class="bird ir">Twitter logo</span>
          </div><!--end social icon-->
          <div class="social-text">
						<?php the_content(); ?>
          </div><!--end social text-->
        </div><!--end social-preview-->
      </div><!--end social content-->
        
    </div><!--end grid-wrap-->
  </article><!--end social-article-->
	<? endif; ?>
	<?php $postType = get_post_type( $post->ID ); if($postType=='post'): ?>
	<article class="blog-article">    
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
          <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
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
          <div class="blog-body-copy">
						<?php $category = get_the_category(); if($category[0]->cat_name=='Gallery'): ?>
							<?php the_content(); ?>
						<?php else: ?>
							<?php the_advanced_excerpt('length=70&use_words=1&no_custom=1&ellipsis=%26hellip;'); ?>
							<p class="continue"><a href="<?php the_permalink() ?>">Continue Reading...</a></p>
						<?php endif; ?>
          </div><!--end blog-body-copy-->
        </div><!--end blog-body-->
      </div><!--end blog-content-->
        
    </div><!--end grid-wrap-->
  </article><!--end blog-article-->
	<?php endif; ?>
	<?php $postType = get_post_type( $post->ID ); if($postType=='gallery'): ?>
	<article class="blog-article">
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
          <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
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
          <div class="blog-body-copy">
						<?php the_content(); ?>
          </div><!--end blog-body-copy-->
        </div><!--end blog-body-->
      </div><!--end blog-content-->
        
    </div><!--end grid-wrap-->
  </article><!--end blog-article-->
	<?php endif; ?>
	
<?php endwhile; ?>

<?php else: ?>

	<!-- Article -->
	<article class="empty">
		<div class="grid-wrap">
			<div class="nothing-to-display"><h2><?php _e( 'Sorry, nothing to display.'); ?></h2></div>
		</div>
	</article>
	<!-- /Article -->

<?php endif; ?>