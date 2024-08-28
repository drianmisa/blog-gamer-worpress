<?php
get_header();

if (!empty(get_the_content())) {
    the_content();
} else {
    include(get_template_directory() . "/comp/home/inicio.php");
}

get_footer();

