<?php get_header() ?>


<section class="container-lg my-3">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12 mb-3">
            <article class="border rounded p-1 shadow">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <div>
                            <h3 class="border rounded py-2 ps-2 m-2">
                                <?php the_title(); ?>
                            </h3>
                            <figure class="img-single">
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <div class="p-2">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php

                    endwhile;
                endif;
                ?>
            </article>


            <?php
            if (comments_open() || get_comments_number()): ?>
                <article class="border rounded p-1 mt-3">
                    <?php
                    comments_template();
                    ?>
                </article>
                <?php
            endif; ?>

        </div>
        <?php get_sidebar() ?>
    </div>
</section>

<?php get_footer() ?>