<?php 
if($registry->has('theme_options') == false) { 
	header("location: themeinstall/index.php"); 
	exit; 
} 

$theme_options = $registry->get('theme_options');
$config = $registry->get('config');
$request = $registry->get('request');
$page_direction = $theme_options->get( 'page_direction' );

require_once( DIR_TEMPLATE.$config->get('theme_' . $config->get('config_theme') . '_directory')."/lib/module.php" );
$modules = new Modules($registry);



?>
<!DOCTYPE html>
<!--[if IE 7]> <html lang="<?php echo $lang; ?>" class="ie7 <?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? ' rtl' : ' no-rtl' ) ?>" <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? 'dir="rtl"' : '' ) ?>> <![endif]-->  
<!--[if IE 8]> <html lang="<?php echo $lang; ?>" class="ie8 <?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? ' rtl' : ' no-rtl' ) ?>" <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? 'dir="rtl"' : '' ) ?>> <![endif]-->  
<!--[if IE 9]> <html lang="<?php echo $lang; ?>" class="ie9 <?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? ' rtl' : ' no-rtl' ) ?>" <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? 'dir="rtl"' : '' ) ?>> <![endif]-->  
<!--[if !IE]><!--> <html lang="<?php echo $lang; ?>" class="<?php if($theme_options->get( 'responsive_design' ) == '0') { echo 'no-'; } ?>responsive <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? ' rtl' : ' no-rtl' ) ?>" <?php echo ($page_direction[$config->get( 'config_language_id' )] == 'RTL' ? 'dir="rtl"' : '' ) ?>> <!--<![endif]-->  
<head>
	<title><?php echo $title; ?></title>
	<base href="<?php echo $base; ?>" />

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<?php if($theme_options->get( 'responsive_design' ) != '0') { ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php } ?>
	<?php if ($description) { ?>
	<meta name="description" content="<?php echo $description; ?>" />
	<?php } ?>
	<?php if ($keywords) { ?>
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<?php } ?>
	
	



       <!--  Custom Stylesheeet code -->

     
        <link  rel="stylesheet" href="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/css/bootstrap.css"  />
         <link  rel="stylesheet" href="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/css/font-awesome.min.css">
       <link rel="stylesheet" href="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/css/owl.carousel.css"  />
       <link  rel="stylesheet" href="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/css/theme.css"  />

      
        <link rel="stylesheet" href="catalog/view/theme/<?php echo $config->get('theme_' . $config->get('config_theme') . '_directory'); ?>/css/style.css" />
       

    
   
<body>

<header class="navbar navbar-fixed-top  nav-white affix-top">
	   <div class="container">
	      <div class="navbar-header">
	      	<a href="#" class="logo"><img src="image/img/logo.png"></a>
	         <div class="mobile-menu-spacer">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
	            <i class="fa fa-bars"></i>
	            <i class="fa fa-close"></i>
	            </button>
	            <button class="top-search"><i class="fa fa-search"></i></button>
	         </div>
	      </div>
	      <div class="collapse navbar-collapse" id="navbar-collapse">
	         <button class="top-search"><i class="fa fa-search"></i></button>
	         <div id="primary-menu" class="main-menu">
	            <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Knowledge Base</a></li>
					<li><a href="#">Media</a></li>
					<li><a href="#">Membership</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
                </ul>
	         </div>
	      </div>
	   </div>
	   </header>
