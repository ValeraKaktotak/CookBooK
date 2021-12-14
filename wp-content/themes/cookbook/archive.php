
<?php
get_header();
?>

<div class="row">
    <?php
    if ( have_posts() ):
        while ( have_posts() ) : the_post(); ?>
            <div class="col-md-12">
                <div class="box-shadow">
                    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                         data-holder-rendered="true">
                    <div >
                        <h3><?php echo the_title(); ?> </h3>

                        <p><?php the_content(); ?></p>

                        <div class="d-flex justify-content-center align-items-center">
                            <div class="btn-group ">
                                <a class="btn btn-secondary btn-lg" href="/"
                                   role="button">Go Home »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
    else :
        // No, we don't have any posts, so maybe we display a nice message
        echo "<p class='no-posts'>" . __( "Sorry, there are no posts at this time." ) . "</p>";
    endif; ?>
</div>

<?php
get_footer();