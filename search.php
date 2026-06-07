<?php get_header(); ?>

<section class="container-lg my-3">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-12 border rounded shadow">
            <article class="p-1">
                <button type="button" class="btn border border-light text-light position-relative my-2">
                    جستجو شده برای :
                    <?php echo get_search_query(); ?>
                </button>
                <div class="row align-items-start">

                    <?php
                    if (have_posts()) {
                        while (have_posts()):
                            the_post(); ?>
                            <div class="col-12 col-sm-6 col-md-6 col-xxl-4 g-2">
                                <div class="card" style="width: 17rem;">
                                    <figure class="mw-100 mh-100 img-cat">
                                        <?php the_post_thumbnail('cat-img'); ?>
                                    </figure>
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

                            <?php
                        endwhile;

                    } else { ?>
                        <div>
                            <h3>نتیجه ای یافت نشد</h3>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="p-1 my-2 d-flex justify-content-center">
                    <?php echo paginate_links(); ?>
                </div>

            </article>
        </div>

        <?php get_sidebar() ?>
    </div>
</section>


<?php get_footer(); ?>