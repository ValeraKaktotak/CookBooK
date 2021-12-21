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

<div style="background-image: url('<?php echo $image; ?>'); background-size: 100% auto;">
    <div class="p-4 p-md-5 mb-4 text-white" style="background-color: rgba(0, 0, 0, 0.1);">
        <div class="col-md-6 px-0">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead my-3"><?php echo $sub_title; ?></p>
            <p class="lead mb-0">
                <a href="<?php echo $button_link; ?>"
                   class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">
                    <?php echo $button_text; ?>
                </a>
            </p>
        </div>
    </div>
</div>