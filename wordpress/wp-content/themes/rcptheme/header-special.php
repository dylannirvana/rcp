<?php
/**
 * Main header for the Single Page app.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rcptheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- From HTML -->
  <title>Ritz Chamber Players</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header> <!-- This tag closes in the index body, front-page.php -->
<!-- 1. BRAND  -->
<!-- 1.1 Navigation  -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="#featured"><h1> Ritz Chamber <span class="subhead"><img src="<?php bloginfo('template_directory'); ?>/images/icons/rhombus.png">Players<img src="<?php bloginfo('template_directory'); ?>/images/icons/rhombus.png"> </span></h1></a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#featured">Home</a></li>
          <li><a href="#mission">Mission</a></li>
          <li><a href="#season">Season</a></li>
          <li><a href="#players">Players</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#sponsor">Sponsor</a></li>
        </ul>        
      </div><!-- collapse navbar-collapse -->
    </div><!-- container -->
  </nav>


  