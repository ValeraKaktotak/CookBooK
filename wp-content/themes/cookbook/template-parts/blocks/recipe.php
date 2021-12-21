<?php
/**
 * @var array $block
 */
?>

<div class="container">
    <div class="row">
        <?php if( have_rows('dish_recipe') ): while( have_rows('dish_recipe') ) : the_row();?>

            <div class="col-6 mb10">
                <img width="100%" src="<?php the_sub_field('step_photo');?>" alt="#">
            </div>
            <div class="col-6 mb10">
                <p>
                    <?php the_sub_field('step_description');?>
                </p>
            </div>
            <?php endwhile;
         endif;?>
    </div>
</div>
