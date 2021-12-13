<?php get_header(); ?>


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
    <?php the_content();?>
    <div class="btn-group ">
        <a class="btn btn-secondary btn-lg" href="<?php the_permalink(); ?>"
           role="button">View details »</a>
    </div>
</article>

<?php }//конец while
} else echo "No, we don't have any posts, so maybe we display a nice message";
    ?>


    </div>
</div>

<?php
get_footer();
