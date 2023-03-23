<?php
/**
 * the template for displaying search results pages
 */
get_header( ) ;
?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
    <?php

        if ( have_posts () ) :
            while ( have_posts () ) :
                the_post();
                get_template_part('template-parts/page/content', 'search');
            endwhile;

            echo paginate_links(  [
                'prev_text' => esc_html__('Prev'),
                'prev_text' => esc_html__('Next')
            ] );

            else :
                get_template_part('template-parts/post/content', 'none');


        endif;
    ?>
    </main>
</div>

<?php  get_footer();  ?>
