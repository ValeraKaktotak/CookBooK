
<form action="<?php echo get_post_type_archive_link( 'dishes' ); ?>" method="get">
    <div class="mb-3">
        <label for="filter_search" class="form-label"><?php echo __( 'Search', DISHES_DB_TEXT_DOMAIN ); ?></label>
        <input type="text" name="filter_search" class="form-control" id="filter_search" value="<?php echo $_GET['filter_search']; ?>">
    </div>
    <div class="mb-3">
        <label for="expiration_date" class="form-label"><?php echo __( 'expiration_date', DISHES_DB_TEXT_DOMAIN ); ?></label>
        <input type="text" name="expiration_date" class="form-control" id="expiration_date" value="<?php echo $_GET['expiration_date']; ?>">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" name="rating" class="form-check-input" id="rating" value="1" <?php echo checked( '1', $_GET['rating'] ); ?>>
        <label class="form-check-label" for="rating"><?php echo __( 'Rating > 4', DISHES_DB_TEXT_DOMAIN ); ?></label>
    </div>
    <button type="submit" class="btn btn-secondary"><?php echo __( 'Submit', DISHES_DB_TEXT_DOMAIN ); ?></button>
</form>