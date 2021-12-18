<?php
/**
 * @var array $block
 */
$photo         = get_sub_field( 'photo' );
$chef_name     = get_sub_field( 'chef_name' );
$description   = get_sub_field( 'description' );
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <h1>Наши шеф повара</h1>
                <div class="carousel-inner">
                    <?php while ( have_rows('chef-slider')): the_row();?>
                        <?php $counter = get_row_index();?>
                        <div class="carousel-item <?php if ( $counter == 1) {echo 'active';} ?>">
                            <h2 style="margin-bottom: 20px;"><?php the_sub_field('chef-name');?></h2>
                            <img src="<?php the_sub_field('photo');?>" class="d-block w-100" style="border-radius: 100%;" alt="#">
                        </div>
                    <?php endwhile; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
