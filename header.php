<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="qNsRd2yOwPajeLThBjZ1mPSZo7mNXEbaCrL-ufYbqXk" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="AngeZanetti's RSS Feed" href="http://feeds.feedburner.com/AngeZanetti2" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://xaviercoiffard.com/Img/Ange.ico' rel='icon' type='image/ico'/>
<?php wp_head(); ?>


</head>
<body>
<div id="Flux">
<a href="http://feeds.feedburner.com/AngeZanetti2" class="rss">Flux des articles</a> <a href="<?php bloginfo('comments_rss2_url'); ?>" class="rss">Flux des commentaires</a> 
</div>

<div id="page">
  <div id="header">
      <div id="headerimg">
	  <!--<h1><a href="<?php echo get_settings('home'); ?>/"> </a></h1> -->
	  <div class="description">
Bienvenue sur mon blog! Je suis consultant spécialisé dans <br/>
les Environnements Immersifs et les Serious Games.<br/>
Ce blog regroupe l'essentiel de ma veille techno <br/>
orienté sur ces domaines précis mais aussi <br/>
une petite touche de Web2.0 et de<br/>
promotion des logiciels  <br/> 
libres.

&nbsp;<!-- <?php bloginfo('description'); ?> --></div>
	 </div> 
	<ul id="nav">
	  <li class="page_item"><a href="<?php echo get_settings('home'); ?>/" title="Home">BLOG</a></li>
	  <?php wp_list_pages('sort_column=menu_order&depth=1&exclude=760&title_li=');?>
	</ul>
<div id="headerlogo"> 

</div> 
 </div>
  <!--/header -->
