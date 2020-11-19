<?php

get_header();

if (have_posts()) {
    while(have_posts()) {
        the_post();
        ?>
        <main id="content-container">
            <script src="/wp-content/themes/sample-wp-theme/scripts.js"></script>
            <script src="<?php echo get_stylesheet_directory_uri()?>/scripts.js"></script>

            <?php // the_post_meta(); ?>
            <header class="py-5 mb-2 bg-warning text-center" id="content-hero">
                <div class="container">
                    <h1><?php the_title(); ?></h1>
                    <span>Written by: <?php the_author(); ?> on <?php the_date(); ?></span>
                </div>
            </header>

            <section class="content container">
                <?php
                // the_content();
                $content = get_the_content("read more", "...");
                echo $content;
                ?>
            </section>
        </main>
        <?php
    }
} else {
    ?>
    <h1>No content available.</h1>
    <?php
}

get_footer();
