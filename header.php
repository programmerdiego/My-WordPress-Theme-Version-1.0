/*
Theme Name: Diego Sanchez Theme 
Author: Diego Sanchez
Author URL: http://www.diegosanchez.info
Version: 1.0
*/

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head();?>
	</head>	
<body <?php body_class(); ?>>

	<!--- site header --->
	<header class="site-heaser">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1> <!-- header main title -->
		<h5><?php bloginfo('description'); ?></h1>                                    <!-- sub header title -->
    </header>  
	<!--- /site header --->
