<?php get_header( 'page-quote' ); ?>

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
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php PG_Helper::rememberShownPost(); ?>
            <div <?php post_class( 'container' ); ?> id="post-<?php the_ID(); ?>">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-xs-12">
                        <section class="contact-1 content-block myform">
                            <div class="container text-center">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div id="contact" class="form-container">
                                        <div id="message"></div>
                                        <form method="post" action="<?php echo esc_url( get_template_directory_uri() ); ?>/js/contact-form.php" name="contactform" id="contactform">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input name="name" id="name" type="text" value="" placeholder="Name" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input name="email" id="email" type="text" value="" placeholder="Email" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input name="phone" id="phone" type="text" value="" placeholder="Phone" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Message" id="textArea"></textarea>
                                                <p class="small text-muted"><span class="guardsman"><?php _e( '* All fields are required.', 'gunnspat' ); ?></span> <?php _e( 'Once we receive your message we will respond as soon as possible.', 'gunnspat' ); ?></p>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit" id="cf-submit" name="submit">
                                                    <?php _e( 'Send', 'gunnspat' ); ?>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.form-container -->
                                </div>
                                <!-- /.col-sm-10 -->
                            </div>
                            <!-- /.container -->
                        </section>                                 
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'gunnspat' ); ?></p>
    <?php endif; ?>
</main>
<footer>
    <div class="panel-footer">
        <?php _e( 'Gunn&apos;s Portable Appliance Testing : 2010-2021&nbsp;', 'gunnspat' ); ?>
        <i class="fa-copyright fa"></i> 
        <?php _e( 'All Rights Reserved.', 'gunnspat' ); ?>
    </div>
</footer>        

<?php get_footer( 'page-quote' ); ?>