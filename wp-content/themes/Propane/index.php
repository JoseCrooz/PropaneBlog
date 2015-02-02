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
	<section id="main" role="main" class="row expand clearfix">
		<?php 
			include_once('includes/upgrade-browser.php');
		?>
		<?php get_template_part('loop'); ?>
		
		<!-- Pagination -->
		<nav class="page-nav">
			<div class="grid-wrap">
				<?php if (function_exists("pagination")) {
					pagination($additional_loop->max_num_pages);
				} ?>
			</div>
		</nav>
	
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