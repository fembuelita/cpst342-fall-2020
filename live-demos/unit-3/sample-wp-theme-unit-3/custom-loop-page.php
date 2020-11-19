<?php
/* Template Name: Example Template */

//
//global $wpdb;
//
//$wpdb->query("SELECT * FROM wp_posts WHERE post_type='post'");

get_header();

$array_of_args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 18,
//    'page' => 1,
    'paged' => 1,
];
$query = new WP_Query($array_of_args);

//$query = new WP_Query('post_type=post&post_status=publish');
/*
if ($query->have_posts()) {
    while($query->have_posts()) {
        $query->the_post();
        ?>
        <main id="content-container">
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
*/
foreach ($query->posts as $qp) {
    ?>
  CUSTOM TEMPLATE
    <main id="content-container">
        <?php // the_post_meta(); ?>
        <header class="py-5 mb-2 bg-warning text-center" id="content-hero">
            <div class="container">
                <h1><?php echo $qp->post_title; ?></h1>
                <span>Written on <?php echo $qp->post_date ?></span>
            </div>
        </header>

        <section class="content container">
            <?php
            // the_content();
//            $content = get_the_content("read more", "...");
//            echo $content;
            echo $qp->post_content; // raw (unfiltered)
            echo apply_filters('the_content', $qp->post_content); // filtered
            ?>
        </section>
    </main>
    <?php
}

wp_reset_postdata();

get_footer();