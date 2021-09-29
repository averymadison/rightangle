<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Arvo:700,400' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<title>
<?php
    if ( is_single() ) {
        single_post_title(); echo ' | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); 
        if( get_bloginfo( 'description' ) ) 
            echo ' | ' ; bloginfo( 'description' ); 
    } elseif ( is_page() ) {
        single_post_title( '' ); echo ' | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
        printf( __( 'Search results for %s', 'portfolio_theme' ), '"'.get_search_query().'"' ); echo ' | '; bloginfo( 'name' );
    } elseif ( is_404() ) {
        _e( 'Not Found', 'portfolio_theme' ); echo ' | '; bloginfo( 'name' );
    } else {
        wp_title( '' ); echo ' | '; bloginfo( 'name' );    }
?>
</title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style-custom.css" />
	
	<?php wp_head() // For plugins ?>
	
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30064622-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="<?php sandbox_body_class() ?> <?php echo portfolio_theme_color(); ?>">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">
<div id="header">

		<h1 id="blog-title"><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><img src="/images/logo.png" alt="Right Angle Woodworks" /></a></h1>
		
</div>
<!--  #header -->
<div id="main">