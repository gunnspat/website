<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php PG_Helper::rememberShownPost(); ?>
        <div <?php post_class( 'container' ); ?> id="post-<?php the_ID(); ?>">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                    <?php the_content(); ?>
                </div>
                <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
                    <div class="fb-page" data-href="https://www.facebook.com/gunnspat/" data-tabs="timeline,messages" data-width="350px" data-height="600px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/gunnspat/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/gunnspat/"><?php _e( 'Gunn&#039;s Portable Appliance Testing', 'gunnspat' ); ?></a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'gunnspat' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>