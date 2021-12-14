<?php get_header(); ?>
<div class="container">
    <div class="main-page-content">
        <div class="content">
            <?php
            $args = array( 'post_type' => 'Dishes',  'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ){ while ( $loop->have_posts() ) {
                $loop->the_post();?>
                <article>
                <div class="col-md-12">
                    <div class="box-shadow">
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <h3><?php echo the_title(); ?> </h3>
                            <p> <?php echo __( 'Vege:' ); ?><?php echo get_field( "vege" ); ?></p>
                            <p> <?php echo __( 'Expiration_date:' ); ?><?php echo get_field( "expiration_date" ); ?></p>
                            <p> <?php echo __( 'Rating:' ); ?><?php echo get_field( "rating" ); ?></p>

                            <div class="d-flex justify-content-center align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="<?php the_permalink(); ?>"
                                       role="button">Смотреть рецепт »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </article>
            <?php }wp_reset_postdata(); //конец while
            } //конец if ?>
        </div>
        <hr>
        <div class="content">
            <h1>News</h1>
            <hr>
            <div class="row">
                <?php
                if ( have_posts() ):
                    // Yep, we have posts, so let's loop through them.
                    while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                                     data-holder-rendered="true">
                                <div class="card-body">
                                    <h3><?php echo the_title(); ?> </h3>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-secondary" href="<?php the_permalink(); ?>"
                                               role="button"><?php echo __( 'View details »' ); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else :
                    echo __( "Sorry, nothing else :(" );
                endif; ?>
            </div>
        </div>
    </div>
</div>




</div>
<?php
get_footer();