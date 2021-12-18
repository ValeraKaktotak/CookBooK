<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-8 margin-30-auto">
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                 data-holder-rendered="true">
            <div >
                <h3><?php echo the_title(); ?> </h3>

                <p><?php the_content(); ?></p>

                <div class="d-flex justify-content-center align-items-center">
                    <div class="btn-group ">
                        <a class="btn btn-secondary btn-lg" href="http://localhost/category/news/"
                           role="button"><?php echo __( 'Go Back »', DISHES_DB_TEXT_DOMAIN ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
