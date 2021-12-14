<?php get_header(); ?>
<div class="container">


<div class="main-page-content">
    <div class="content">
        <?php
        $args = array( 'post_type' => 'Dishes',  'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ){ while ( $loop->have_posts() ) {
            $loop->the_post();?>
            <div class="col-md-12">
                <div class="box-shadow">
                    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                         data-holder-rendered="true">
                    <div class="card-body">
                        <h3><?php echo the_title(); ?> </h3>

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
</div>




</div>
<?php
get_footer();