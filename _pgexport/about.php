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
                    <?php echo PG_Image::getPostImage( null, 'medium', null, 'height', null ) ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'gunnspat' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>