<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>//<//?php bloginfo('name'); ?></title> -->
    <?php wp_head(); ?>

</head>

<body class="dark-mode"> <!-- top-header -->
    <section class=" pb-2 pt-2 bg-black">
        <div class="container-lg">
            <div class="row">
                <div class="col-8">
                    <?php
                    if (has_nav_menu('top_menu')) {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top_menu',
                                'menu_class' => 'list-unstyled d-flex btn-donate text-center',
                                'container' => false
                            )
                        );
                    }
                    ?>
                </div>
                <div dir="ltr" class="col-4">
                    <label class="switch">
                        <span class="sun"><svg viewBox="0 0 24 24">
                                <g fill="#ffd43b">
                                    <circle r="5" cy="12" cx="12"></circle>
                                    <path
                                        d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z">
                                    </path>
                                </g>
                            </svg></span>
                        <span class="moon"><svg viewBox="0 0 384 512">
                                <path
                                    d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z">
                                </path>
                            </svg></span>
                        <input type="checkbox" class="input">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>

        </div>
    </section>
    <!-- end-top-header -->

    <!-- start-header -->
    <header>
        <section class="container-lg shadow">
            <div class="row pt-2 border rounded align-items-center">

                <div class="col-8 col-lg-4">
                    <section class="text-start text-light">
<h2 class="border border-1 d-inline-block rounded p-2">
    <a href="<?php echo home_url('/'); ?>">
        <?php bloginfo('name'); ?>
    </a>
</h2>
                    </section>
                </div>

                <div class="col-2 text-end d-lg-none">
                    <section class="text-end text-light">
                        <i class="fa fa-search"></i>
                    </section>
                </div>

                <div class="col-2 col-lg-7">

                    <!-- offcanvas-menu -->
                    <div class="menu-sm d-lg-none text-end">
                        <i class="fa fa-th-list" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>

                        <div class="offcanvas offcanvas-end bg-dark text-light" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header border-bottom">
                                <h2>اوبر دیزاین</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">

                                <nav>
<?php
if (has_nav_menu('main_menu')) {
    wp_nav_menu(
        array(
            'theme_location' => 'main_menu',
            'menu_class' => 'list-unstyled text-start',
            'container' => false,
            'link_before' => '<span class="btn-footer">',
            'link_after' => '</span>'
        )
    );
}
?>
                                </nav>

                            </div>
                        </div>
                    </div>

                    <div class="menu-md d-none d-lg-flex w-100 text-end main-menu-one">
                        <?php
                        if (has_nav_menu('main_menu')) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main_menu',
                                    'menu_class' => 'w-100 list-unstyled d-flex text-center justify-content-end fw-bold',
                                    'container' => false
                                )
                            );
                        }
                        ?>
                    </div>
                    <!-- end-offcanvas-menu -->

                </div>
                <!-- search-box -->
                <div class="col-1 text-center d-none d-lg-inline-block">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn fa fa-search text-light" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content bg-dark">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">دنبال چی میگردی؟</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-floating" method="get" action="<?php home_url('/'); ?>">

                                        <input type="text" name="s" class="form-control" id="floatingPassword" value="<?php the_search_query(); ?>"
                                            placeholder="جستجو">
                                        <label for="floatingPassword" class="text-dark">جستجو</label>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn border rounded text-white">جستجو</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end-search-box -->


            </div>
        </section>
    </header>
    <!-- end header -->