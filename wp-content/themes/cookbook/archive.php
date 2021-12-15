
<?php
get_header();
?>
<div class="container">
    <div class="row">
        <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
        <div class="col">
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
            <?php endwhile;
            else :
                echo __( "Sorry, nothing else ;(" );
            endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();