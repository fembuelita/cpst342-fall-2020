<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Sample WP Theme</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="navbar navbar-light bg-info py-2" id="primary-nav">
        <div class="container">
            <a class="navbar-brand d-inline-block" href="<?php get_site_url();?>">CPST342 - Intro to Web App Dev</a>

            <ul class="list-unstyled mb-0 ml-auto">
                <li class="d-inline-block mb-0 mr-1">
                    <a href="#" class="text-white">Sample Link</a>
                </li>
                <li class="d-inline-block mb-0 mr-1">
                    <a href="#" class="text-white">Sample Link</a>
                </li>
                <li class="d-inline-block mb-0">
                    <a href="#" class="text-white">Sample Link</a>
                </li>
            </ul>

        </div>
    </nav>


