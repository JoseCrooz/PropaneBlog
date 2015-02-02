<?php 
  include_once('includes/page-head.php');
?>
<title>Propane Studio</title>
<meta name="description" content="">
<?php 
  include_once('includes/scripts-header.php');
?>
</head>
<body class="front-page">
  <div id="container" class="frame">
  <?php 
    include_once('includes/header.php');
  ?>
	<!-- Section -->
	<section id="main" role="main" class="row expand clearfix" data-controller="resultsBar">
	
	<!-- Article -->
	<article class="empty">
		<div class="grid-wrap">
			<div class="nothing-to-display"><h1><?php _e( 'Page not found', 'html5blank' ); ?></h1></div>
			<div class="nothing-to-display"><h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a></h2></div>
		</div>
	</article>
	<!-- /Article -->
	
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

