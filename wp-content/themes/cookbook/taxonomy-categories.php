<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="col">

                <h1>
                    <?php the_title();?>
                </h1>
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"

                <div class="btn-group margin-20">
                    <a class="btn btn-secondary btn-lg" href="<?php the_permalink(); ?>"
                       role="button">View details »</a>
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
