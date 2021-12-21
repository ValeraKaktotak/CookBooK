<?php get_header(); ?>

    <div class="col-md-12 center-block margin-20">
        <div class="col-3 ">
            <?php echo get_template_part( 'template-parts/dishes-filter' ); ?>
        </div>
    </div>


<div class="container">
    <div class="row">
        <?php if (have_posts()):while (have_posts()) : the_post();?>
        <div class="col margin-20 border">
            <article>
                <h1>
                    <?php the_title();?>
                </h1>
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                     data-holder-rendered="true">
                <p> <?php the_terms(get_the_ID(), 'categories') ?></p>
                <p> <?php echo __( 'Dishes type:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "dishes_type" ); ?></p>
                <p> <?php echo __( 'Expiration_date:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "expiration_date" ); ?></p>
                <p> <?php echo __( 'Rating:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "rating" ); ?></p>
                <div class="btn-group margin-20">
                    <a class="btn btn-secondary btn-lg" href="<?php the_permalink(); ?>"
                       role="button">View details »</a>
                </div>

            </article>
        </div>
            <?php wp_reset_postdata();?>
        <?php endwhile;
        else :
            echo __( "Sorry, nothing else :(", DISHES_DB_TEXT_DOMAIN );
        endif; ?>
    </div>
</div>



<?php
get_footer();



