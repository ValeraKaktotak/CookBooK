<?php
$new_dishes = get_posts( [
	'post_type' => 'dishes',
    'numberposts' => 2,
	'orderby'   => 'publish_date',
	'order'     => 'DESC',
] );
?>
<div class="p-4 bg-light rounded">
    <h4><?php echo __( 'New Dishes' ); ?></h4>
    <ol class="list-unstyled mb-0">
		<?php foreach ( $new_dishes as $dishes ): ?>
            <li>
                <a href="<?php echo get_permalink( $dishes ); ?>">
					<?php echo get_the_title( $dishes ); ?>
                </a>
            </li>
		<?php endforeach; ?>
    </ol>
</div>