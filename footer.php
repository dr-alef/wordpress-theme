<!-- start-footer -->

<section class="container-lg">
    <footer>
        <div class="row justify-content-between shadow gy-2">
            <div class="col-12 col-md-4 border rounded">
                <div>
                    <?php if (is_active_sidebar('uberdesign_footer1')) {
                        dynamic_sidebar('uberdesign_footer1');
                    }
                    ?>
                </div>
            </div>

            <div class="col-12 col-md-4 border rounded">
                <div>
                    <?php if (is_active_sidebar('uberdesign_footer2')) {
                        dynamic_sidebar('uberdesign_footer2');
                    }
                    ?>
                </div>
            </div>

            <div class="col-12 col-md-4 border rounded">
                <div>
                    <?php if (is_active_sidebar('uberdesign_footer3')) {
                        dynamic_sidebar('uberdesign_footer3');
                    }
                    ?>
                </div>
            </div>

        </div>
    </footer>

</section>
<!-- end-footer -->


<?php wp_footer(); ?>
</body>

</html>