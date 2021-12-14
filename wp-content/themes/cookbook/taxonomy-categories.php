<?php get_header(); ?>

<main>

    <div class="main-page-content">
        <div class="content">
            <?php
            if ( have_posts() ){ while ( have_posts() ) {
                the_post();?>
                <article>
                    <h1>
                        <?php the_title();?>
                    </h1>
                    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"

                    <div class="btn-group ">
                        <a class="btn btn-secondary btn-lg" href="<?php the_permalink(); ?>"
                           role="button">View details »</a>
                    </div>
                </article>
            <?php }//коней while
            } //конец if ?>
        </div>
    </div>

</main>

<?php
get_footer();
