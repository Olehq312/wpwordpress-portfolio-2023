<?php 
/**
 * 
 * 
 * This is the template that displays all the <head> sections up until main
 * 
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=$, intial-scale=1.0">
        <title>OlehShabatin Portfolio</title>





        <?php wp_head(); ?>
    </head>

    <?php
   // get_template_part('template-parts/navigation/navmenu')
    ?>
<body <?php body_class(); ?>>
