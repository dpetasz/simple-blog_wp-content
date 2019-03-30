<?php get_header(); ?>

<div id="main-container">
    <section id="content-container">

        <?php 
        // Początek pętli
        while (have_posts()) : the_post();

            // Pobranie odpowiedniego typu treści
            get_template_part('content', 'single');

        // Koniec pętli
        endwhile;
        ?>

    </section> <!-- #main-container  - koniec -->

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?> 