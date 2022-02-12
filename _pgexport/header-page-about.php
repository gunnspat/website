<!doctype html>
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="discription" content="Everything you need to know about PAT Testing, PAT Testing Kent, PAT Testing Sussex, PAT Testing London">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <div id="fb-root"></div>
        <div class="header hdsml">
            <div class="logo">
                <h1 class="headertxt hidden-xs hidden-sm"><?php _e( 'For all your PAT Testing needs call - 07881688784', 'gunnspat' ); ?></h1>
                <h3 class="headertxt hidden-xs hidden-md hidden-lg"><?php _e( 'For all your PAT Testing needs call - 07881688784', 'gunnspat' ); ?></h3>
                <h5 class="headersml hidden-md hidden-lg hidden-sm"><?php _e( 'Call Us - 07881688784', 'gunnspat' ); ?></h5>
            </div>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'gunnspat' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="navbar-left hidden-xs">
                        <i class="fa fa-cc-paypal fa-2x fa-inverse"></i>
                    </div>
                    <?php
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
                                                    <a {ATTRS}>{TITLE}</a>
                                                </li>';
                        wp_nav_menu( array(
                            'menu' => 'primary',
                            'container' => '',
                            'items_wrap' => '<ul class="%2$s nav navbar-centre navbar-nav" id="%1$s">%3$s</ul>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                    <div class="navbar-right hidden-xs">
                        <?php if ( get_theme_mod( 'facebook' ) ) : ?>
                            <a href="<?php echo get_theme_mod( 'facebook', 'https://www.facebook.com/gunnspat' ); ?>" target="_blank"><i class="fa fa-facebook fa-inverse fa-2x"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'twitter' ) ) : ?>
                            <a href="<?php echo get_theme_mod( 'twitter', 'https://twitter.com/gunnspat_steve' ); ?>" target="_blank"><i class="fa fa-inverse fa-twitter fa-2x"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
        <main>