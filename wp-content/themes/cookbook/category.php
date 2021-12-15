<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="col margin-20 border">
            <article>
                <h1>
                    <?php the_title();?>
                </h1>

                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                     data-holder-rendered="true">
                <div class="btn-group margin-20">
                    <a class="btn btn-secondary" href="<?php the_permalink(); ?>"
                       role="button"><?php echo __( 'View details »' ); ?></a>
                </div>
            </article>
        </div>
        <?php endwhile;
        else :
            echo __( "Sorry, nothing else :(" );
        endif; ?>
    </div>
</div>

<!--
    <div class="container">
        <div class="main-page-content">
            <div class="content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <article>
                        <h1>
                            <?php the_title();?>
                        </h1>
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                             data-holder-rendered="true">
                        <div class="btn-group">
                            <a class="btn btn-secondary" href="<?php the_permalink(); ?>"
                               role="button"><?php echo __( 'View details »' ); ?></a>
                        </div>
                    </article>
                <?php endwhile;
                else :
                    echo __( "Sorry, nothing else :(" );
                endif; ?>
            </div>
        </div>
    </div>
    -->
<?php
get_footer();