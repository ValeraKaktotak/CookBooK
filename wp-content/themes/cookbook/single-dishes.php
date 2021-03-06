<?php get_header(); ?>
<?php
/**
 * @var array $block
 */

$image     = get_field( 'bg_image' );
$title     = get_field( 'bg_title' );
$sub_title = get_field( 'bg_sub_title' );
$button_text = get_field( 'bg_button_text' );
$button_link = get_field( 'bg_button_link' );
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col text-center">
            <article>
                <?php echo get_template_part( 'template-parts/new-dishes' ); ?>
                <div class="col-md-12">
                    <div class="box-shadow">
                        <?php echo get_the_post_thumbnail( null,'', array('class' => 'width-100') ); ?>
                        <div>
                            <h3><?php echo the_title(); ?> </h3>
                            <p> <?php the_terms(get_the_ID(), 'categories') ?></p>
                            <p> <?php echo __( 'Dishes type:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "dishes_type" ); ?></p>
                            <p> <?php echo __( 'Expiration_date:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "expiration_date" ); ?></p>
                            <p> <?php echo __( 'Rating:', DISHES_DB_TEXT_DOMAIN ); ?><?php echo get_field( "rating" ); ?></p>
                            <p><?php the_content(); ?></p>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="btn-group ">
                                    <a class="btn btn-secondary btn-lg" href="<?php echo home_url().'/dishes';?>"
                                       role="button"><?php echo __( 'Go Back »', DISHES_DB_TEXT_DOMAIN ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<?php
get_footer();
