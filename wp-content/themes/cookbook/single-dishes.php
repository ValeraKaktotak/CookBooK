<?php get_header(); ?>


    <div class="main-page-content">
        <div class="content">
            <article>
                <h2> <?php echo the_title(); ?></h2>

                <p><?php the_content(); ?></p>

                <div class="btn-group ">
                    <a class="btn btn-secondary btn-lg" href="/"
                       role="button">Go Home »</a>
                </div>

            </article>
        </div>
    </div>


<?php
get_footer();
