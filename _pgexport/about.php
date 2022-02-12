<?php get_header(); ?>

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
                    <ul class="nav navbar-nav navbar-centre">
                        <li>
                            <a href="index.html"><?php _e( 'Home', 'gunnspat' ); ?></a>
                        </li>
                        <li>
                            <a href="about.html"><?php _e( 'About Us', 'gunnspat' ); ?></a>
                        </li>
                        <li>
                            <a href="prices.html"><?php _e( 'Prices', 'gunnspat' ); ?></a>
                        </li>
                        <li>
                            <a href="quote.html"><?php _e( 'Quote Me', 'gunnspat' ); ?></a>
                        </li>
                        <li class="dropdown">
</li>
                    </ul>
                    <div class="navbar-right hidden-xs">
                        <a href="https://www.facebook.com/gunnspat" target="_blank"><i class="fa fa-facebook fa-inverse fa-2x"></i></a>
                        <a href="https://twitter.com/gunnspat_steve" target="_blank"><i class="fa fa-inverse fa-twitter fa-2x"></i></a>
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
                            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                                <?php the_content(); ?>
                            </div>
                            <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
                                <?php echo PG_Image::getPostImage( null, 'medium', null, 'height', null ) ?>
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
                <i class="fa-at fa"></i> 
                <?php _e( 'Gunn\'s Portable Appliance Testing : 2017', 'gunnspat' ); ?> 
                <i class="fa-copyright fa"></i> 
                <?php _e( 'All Rights Reserved.', 'gunnspat' ); ?>
            </div>
        </footer>        

<?php get_footer(); ?>