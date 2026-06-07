<?php get_header(); ?>

<main class="mt-3 mb-3">
    <!-- start-blog-slider -->
    <section class='container-lg border border-1 rounded' dir="ltr">
        <div dir="rtl" class="pt-3">
            <button type="button" class="btn border border-light text-light position-relative">
                <a href="<?php //echo get_post_type_archive_link('category'); ?> ">مقالات ما</a>
                <span class="position-absolute top-0 start-100 p-2 translate-middle badge rounded-pill bg-success">
                </span>
            </button>
        </div>
        <div class='row align-items-center justify-content-center'>
            <div class="owl-carousel owl-theme py-3" id='carousel-blog'>
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <div class="item" dir="rtl">
                            <div class="card">
                                <?php the_post_thumbnail('post-img') ?>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="<?php the_permalink(); ?>" class="text-dark"> <?php the_title() ?></a>
                                    </h5>
                                    <p class="card-text">
                                        <?php the_excerpt()
                                            ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn border border-1 text-dark">مشاهده مطلب</a>
                                </div>
                            </div>
                        </div>

                        <?php

                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <!-- start-blog-slider -->

</main>

<?php get_footer(); ?>