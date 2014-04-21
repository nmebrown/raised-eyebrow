<?php
/*
 * The Header template
 */
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <title><?php wp_title(); ?></title>
    <meta name="description" content="Vancouver Recital Society">

    <link rel="stylesheet" href="http://take-flight.net/wordpress/wp-content/themes/raisedeyebrow/normalize.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body <?php body_class(); ?>>
    <header>
      <div class="container clear">
        <img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>"  class="logo">

        <div class="season-sponser">
          Season Sponsor
        </div>
      </div>

      <nav id="navigation-main">
        <div class="container clear">
          <ul class="menu">
            <li><a href="">Concerts & Events</a></li>
            <li><a href="">Tickets & Subscriptions</a></li>
            <li><a href="">Your Support</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact</a></li>
          </ul>

          <ul class="social">
            <li><a href="http://www.facebook.com/" class="fb">&nbsp;</a></li>
            <li><a href="http://www.facebook.com/" class="twt">&nbsp;</a></li>
          </ul>
        </div>
      </nav>
    </header>