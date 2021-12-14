<?php get_header(); ?>

    <div class="main-page-content">
        <div class="content">
            <article>
                <div class="col-md-12">
                    <div class="box-shadow">
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>"
                             data-holder-rendered="true">
                        <div >
                            <h3><?php echo the_title(); ?> </h3>

                            <p><?php the_content(); ?></p>

                            <div class="d-flex justify-content-center align-items-center">
                                <div class="btn-group ">
                                    <a class="btn btn-secondary btn-lg" href="http://localhost/category/news/"
                                       role="button">Go Back »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
        </div>
    </div>

<?php
get_footer();
