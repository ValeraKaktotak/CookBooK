<?php get_header(); ?>

<div class="container">
    <h1>Категория <?php echo the_terms(get_the_ID(), 'categories') ?></h1>
    <hr>
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="col border margin-20">
            <h1>
                <?php the_title();?>
            </h1>
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" />
            <p> <?php echo __( 'Dishes type:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "dishes_type" ); ?></p>
            <p> <?php echo __( 'Expiration_date:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "expiration_date" ); ?></p>
            <p> <?php echo __( 'Rating:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "rating" ); ?></p>
            <div class="btn-group margin-20">
                <a class="btn btn-secondary btn-lg" href="<?php the_permalink(); ?>"
                role="button"><?php echo __( 'View details »', DISHES_DB_TEXT_DOMAIN ); ?></a>
            </div>
        </div>
        <?php endwhile;
        else :
            echo __( "Sorry, nothing else ;(" );
        endif; ?>
    </div>
</div>



<?php
get_footer();
