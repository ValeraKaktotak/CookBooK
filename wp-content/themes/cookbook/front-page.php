<?php get_header(); ?>
    <?php ?>
    <div class="container">
        <h1>Dishes</h1>
        <hr>
        <div class="row">
            <?php
            $args = array( 'post_type' => 'dishes', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) :$loop->the_post();?>
                <div class="col margin-20 border">
                    <article>
                        <h1>
                            <?php the_title();?>
                        </h1>
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                             data-holder-rendered="true">
                        <p> <?php echo __( 'Dishes type:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "dishes_type" ); ?></p>
                        <p> <?php echo __( 'Expiration_date:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "expiration_date" ); ?></p>
                        <p> <?php echo __( 'Rating:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "rating" ); ?></p>
                        <div class="btn-group ">
                            <a class="btn btn-secondary btn-lg" href="<?php the_permalink(); ?>"
                               role="button"><?php echo __( 'View details »', DISHES_DB_TEXT_DOMAIN ); ?></a>
                        </div>
                    </article>
                </div>
                <?php wp_reset_postdata();?>
            <?php endwhile;
            else :
                echo __( "Sorry, nothing else :(" );
            endif; ?>
        </div>

        <h1>News</h1>
        <hr>
        <div class="row">
            <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
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
                                       role="button"><?php echo __( 'View details »', DISHES_DB_TEXT_DOMAIN ); ?></a>
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

<?php
get_footer();