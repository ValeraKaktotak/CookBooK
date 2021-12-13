<?php get_header(); ?>
<div class="container">


<div class="main-page-content">
    <div class="content">
        <?php
        $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ){ while ( $loop->have_posts() ) {
            $loop->the_post();?>
            <article>
                <h1>
                    <?php the_title();?>
                </h1>
                <?php the_content();?>
            </article>
        <?php }//коней while
        } //конец if ?>
    </div>
</div>




</div>
<?php
get_footer();