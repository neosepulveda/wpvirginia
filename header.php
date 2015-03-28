<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package wp-virginia
 */
?>
<html <?php language_attributes(); ?>>
<head>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/Vlogo.png" />
	<meta charset="utf-8">
    <title>Virginia Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

	<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>  <!-- Replacing the body tag <body> -->
	
	<div class="navbar navbar-default navbar-fixed-top navbar-shadow" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>"><?php echo get_the_title('4'); ?></a>				
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
                		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Projects <span class="caret"></span></a>
                		<ul class="dropdown-menu" role="menu">
                  			<?php /* UPDATE FOR PRINTS wp_list_pages(array('title_li' => '', 'exclude' => '4,41,243')); */ ?>
                  			<?php
                  				/*
						 		 * Excluded pages: 
						 		 * 4   ---> Home
								 * 41  ---> Contact
								 * 239  ---> Print IMPORTANT: IT HAS TO BE INCLUDED AFTER SOME PRINTS!
								 * 243 --->	Clients 
								 */
                  				wp_list_pages(array('title_li' => '', 'exclude' => '4,41,239,243')); 
                  				                 				
                  			?>               			
                		</ul>
              		</li>              		
					<?php
						/*
						 * Excluded pages: 
						 * 4   ---> Home
						 * 37  ---> Product
						 * 39  ---> Space
						 * 239 --->	Print 
						 */				
						wp_list_pages(array('title_li' => '', 'exclude' => '4,37,39,239')); 
					?>										
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<div class="icons-right-navbar">
						<a href="https://www.behance.net/virginiadecolombani" alt="behance"><i class="fa fa-behance fa-lg"></i></a>
						<a href="https://www.linkedin.com/profile/view?id=244103382" alt="linkedin"><i class="fa fa-linkedin fa-lg"></i></a>
					</div>	
				</ul>
			</div>		
		</div>
	</div>

	<div class="container">