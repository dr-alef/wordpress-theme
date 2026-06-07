<?php get_header(); ?>

<section class="container-lg my-3">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12">
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
                            <?php the_content(); ?>
                        </div>
                        <?php

                    endwhile;
                endif;
                ?>
            </article>

            <article class="border rounded mt-3 p-1 shadow">
                <h3 class="border rounded ps-2 py-2 m-2">مطالب مرتبط</h3>
                <div class='row align-items-center justify-content-center' dir="ltr">
                    <div class="owl-carousel owl-theme py-3" id='relatedposts'>
                        <?php

                        $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID)));
                        if ($related)
                            foreach ($related as $post) {
                                setup_postdata($post); ?>

                                <div class="item" dir="rtl">
                                    <div class="card">
                                        <?php the_post_thumbnail('post-img') ?>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="<?php the_permalink(); ?>" class="text-dark">
                                                    <?php the_title() ?></a>
                                            </h5>
                                            <p class="card-text">
                                                <?php the_excerpt()
                                                    ?>
                                            </p>
                                            <a href="<?php the_permalink(); ?>" class="btn border border-1 text-dark">مشاهده
                                                مطلب</a>
                                        </div>
                                    </div>
                                </div>

                            <?php }
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </article>
            <article class="border rounded p-1 mt-3">
                <?php comments_template(); ?>
            </article>
        </div>
        <?php get_sidebar() ?>
    </div>
</section>

<?php get_footer(); ?>