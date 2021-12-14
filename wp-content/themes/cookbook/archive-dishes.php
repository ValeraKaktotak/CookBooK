<?php get_header(); ?>

    <div class="col-md-12 center-block margin-20">
        <div class="col-3 ">
            <?php echo get_template_part( 'template-parts/dishes-filter' ); ?>
        </div>
    </div>


<div class="main-page-content">
    <div class="content">

<?php
$args = array( 'post_type' => 'dishes', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
if ( $loop->have_posts() ){ while ( $loop->have_posts() ) {
    $loop->the_post();?>

<article>
    <h1>
        <?php the_title();?>
    </h1>
    <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
         data-holder-rendered="true">
    <p> <?php echo __( 'Vege:' ); ?><?php echo get_field( "vege" ); ?></p>
    <p> <?php echo __( 'Expiration_date:' ); ?><?php echo get_field( "expiration_date" ); ?></p>
    <p> <?php echo __( 'Rating:' ); ?><?php echo get_field( "rating" ); ?></p>
    <div class="btn-group ">
        <a class="btn btn-secondary btn-lg" href="<?php the_permalink(); ?>"
           role="button">View details »</a>
    </div>
</article>

<?php }wp_reset_postdata();//конец while
} else echo "Sorry, nothing else ;(";
    ?>


    </div>
</div>

<?php
get_footer();
