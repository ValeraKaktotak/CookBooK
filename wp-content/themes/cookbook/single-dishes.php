<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <article>
                <?php echo get_template_part( 'template-parts/new-dishes' ); ?>
                <div class="col-md-12">
                    <div class="box-shadow">
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" data-holder-rendered="true" />
                        <div >
                            <h3><?php echo the_title(); ?> </h3>
                            <p> <?php echo __( 'Dishes type:' ); ?><?php echo get_field( "dishes_type" ); ?></p>
                            <p> <?php echo __( 'Expiration_date:' ); ?><?php echo get_field( "expiration_date" ); ?></p>
                            <p> <?php echo __( 'Rating:' ); ?><?php echo get_field( "rating" ); ?></p>
                            <?php echo get_post_meta( get_the_ID(), 'rating', true ); ?>
                            </p>
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
            </article>
        </div>
    </div>
</div>

<?php
get_footer();
