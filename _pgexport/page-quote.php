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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only"><?php _e( 'Toggle navigation', 'gunnspat' ); ?></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="navbar-left hidden-xs"><i class="fa fa-cc-paypal fa-2x fa-inverse"></i>
                    </div>
                    <ul class="nav navbar-nav navbar-centre">
                        <li><a href="index.html"><?php _e( 'Home', 'gunnspat' ); ?></a>
                        </li>
                        <li><a href="about.html"><?php _e( 'About Us', 'gunnspat' ); ?></a>
                        </li>
                        <li><a href="prices.html"><?php _e( 'Prices', 'gunnspat' ); ?></a>
                        </li>
                        <li><a href="quote.html"><?php _e( 'Quote Me', 'gunnspat' ); ?></a>
                        </li>
                        <li class="dropdown">
</li>
                    </ul>
                    <div class="navbar-right hidden-xs"><a href="https://www.facebook.com/gunnspat" target="_blank"><i class="fa fa-facebook fa-inverse fa-2x"></i></a><a href="https://twitter.com/gunnspat_steve" target="_blank"><i class="fa fa-inverse fa-twitter fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div>
                            <p><?php _e( 'For your', 'gunnspat' ); ?> <strong><?php _e( 'No Obligation', 'gunnspat' ); ?></strong> <?php _e( 'Quote please complete the form below. We aim to contact you within 48 working hours, or feel free to contact us direct on 07881688784 or E-Mail on', 'gunnspat' ); ?> <a href="gunnspat@hotmail.co.uk"><?php _e( 'gunnspat@hotmail.co.uk', 'gunnspat' ); ?></a></p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <section class="contact-1 content-block myform">
                            <div class="container text-center">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div id="contact" class="form-container">
                                        <div id="message"></div>
                                        <form method="post" action="<?php echo get_template_directory_uri(); ?>/js/contact-form.php" name="contactform" id="contactform">
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
        </main>
        <footer>
            <div class="panel-footer">
                <?php _e( 'Gunn&apos;s Portable Appliance Testing : 2010-2021&nbsp;', 'gunnspat' ); ?><i class="fa-copyright fa"></i> 
                <?php _e( 'All Rights Reserved.', 'gunnspat' ); ?>
            </div>
        </footer>        

<?php get_footer(); ?>