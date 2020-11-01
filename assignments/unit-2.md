# Unit 2 Assignment

## Overview
For this assignment, you're asked to create a WordPress website that uses Bootstrap. You may wish to start with <https://wordpress.org/themes/wp-bootstrap-starter/> which has much more functionality than you will need, but will save you some time. 

_Note:_ If you are seeking a greater challenge, or want something more flexible to customize by using SCSS/SASS, you can either build one from scratch or check out <https://them.es/starter-bootstrap/>. This requires you to use npm and the CLI to build the package, though.

Once you have the core theme installed, you should take some time to customize it and add content. If you wish to quickly add lots of content, you may enjoy the plugin FakerPress <https://wordpress.org/plugins/fakerpress/>.

Your website will need to be uploaded to Pantheon and deployed to the `test` environment. 

## Requirements

1. Your entire website must be fully responsive
1. Your website must have a static home page (not displaying latest posts)
1. Your website must have a blog archive (a page that displays the latest posts)
1. Your website must have a contact page with a working contact form. Note that contact forms on Pantheon will likely result in an email going to your spam folder. Curious why? Come ask about it during office hours. 
1. Your website must have at least 2 blog posts, and these should have a unique template to display them.
1. You must customize the color palette of your install (do not use default theme colors from the themes listed above).
1. Create a function called `get_posts_by_slug($title)` in functions.php. This function *must* use WP_Query or WPDB (hint, WP_Query is much easier here) to retrieve all posts that match a slug provided as a function parameter. 
1. Use `get_posts_by_slug()` on a template called `singular.php` to display content. Make sure `singular.php` is styled like similar templates. (Hint: if your theme doesn't include singular, check ou t the WordPress template hierarchy and copy a similar template file as your starting point.)

## Submission
Submit the team member names (up to 2) who worked on this project together and the site URL that I should review. I will pull-down your source code from Pantheon to check that so you do not need to submit any code via Sakai.

## Grading and Rubric

This assignment is due at the end of Unit 1. It is worth 100 points.

* 100/100 - Website is available on Pantheon on the `test` environment and meets all requirements.
* 90/100 - Website is available on Pantheon (either `dev` or `test`) and meets nearly all requirements.
* 75/100 - Website is available on Pantheon (either `dev` or `test`) and is missing several requirements.
* 0-50/100 - Website is available on Pantheon (either `dev` or `test`) and is missing many requirements. (Graded based on effort).
